<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Personal extends Recruitment_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->personal();
    }

    public function personal()
    {
        $this->check_correct_page_landing(3);
        $data['completed']=$this->get_status();
        if($data['completed']['personal'])
        {
            $data['raw_data']=json_decode($this->get_data('personal'),true);
            $data['files_data']=$this->recruitment_model->get_all_files_info($this->ion_auth->get_user_id(),'personal');
        }
        $data['current_page'] = 'personal';
        $data['scripts'] = array('personal.js');

        $this->_render_page_new('personal','custom_js/personal',$data);
    }

    public function submit()
    {

        if (empty($_POST))
        {
            $this->session->set_flashdata('other', validation_errors());
            redirect('recruitment/personal','refresh');
        }
        else
        {
            $value=json_encode($_POST);
            // print_r($value);
            $userid=$this->ion_auth->get_user_id();
            $query=$this->recruitment_model->insert_data($userid,'personal',$value,'2');
            if($query==true)
            {
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'pdf|txt';
                $config['max_size'] = '1024';//maximum size is 1 Mb
                $config['overwrite']=TRUE;
                $this->load->library('upload',$config);
                $field_names=array('category_pdf','pda_pdf');
                $files_data=array();
                $all_files_upload_errors='';
                $upload_error_flag=0;
                //print_r($_FILES);
                foreach ($field_names as $key => $value) {
                    if(!isset($_FILES[$value]) )
                        continue;
                    if( !is_uploaded_file($_FILES[$value]['tmp_name'])|| !file_exists($_FILES[$value]['tmp_name']) ) {
                        continue;
                    }
                    $upload_error_flag=0;
                    $name=$_FILES[$value]['name'];
                    $newname=str_replace(" ", "_", $name);
                    $filename=$userid.'_category'.uniqid().'_'.$newname;
                        // print_r($filename);
                    $files_data[]=array(
                        'userid'=>$userid,
                        'field'=>$value,
                        'original_name'=>$_FILES[$value]['name'],
                        'stored_name'=>$filename
                        );
                    $config['file_name']=$filename;

                    $this->upload->initialize($config);
                    if(!$this->upload->do_upload($value))
                    {
                        $upload_error_flag=1;
                        $all_files_upload_errors .= '<p>'.$this->upload->display_errors().'</p>';
                            // print_r($all_files_upload_errors);
                    }

                }
                if($upload_error_flag==0)
                {
                    if(sizeof($files_data)!=0)
                    $this->recruitment_model->insert_file_details($files_data,'personal');
                }
                else
                {
                    $this->session->set_flashdata('danger', $all_files_upload_errors);
                    redirect('recruitment/personal','refresh');
                }
                if($this->input->post('proceed')==0)
                {
                    $this->session->set_flashdata('info', 'All form-data saved');
                    redirect('recruitment/personal','refresh');
                }
                else
                {
                    redirect('recruitment/educational','refresh');
                }

            }
            else
            {
                $this->session->set_flashdata('danger', 'Error in submitting data');
                redirect('recruitment/personal','refresh');

            }
        }
    }

}

/* End of file personal.php */
/* Location: ./application/modules/recruitment/controllers/personal.php */