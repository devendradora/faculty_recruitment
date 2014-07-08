<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Experience extends Recruitment_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->experience();
    }

    public function experience()
    {
        $this->check_correct_page_landing(5);

        $data['completed']=$this->get_status();
        if($data['completed']['applypost'])
        {
            $data['post']=$this->get_data('post');
        }
        if($data['completed']['experience'])
        {
            $data['saved_data']=json_decode($this->get_data('experience'),true);
            $data['files_data']=$this->recruitment_model->get_all_files_info($this->ion_auth->get_user_id(),'experience');
        }
        $data['current_page'] = 'experience';
        $data['scripts'] = array('experience.js');
        $data['adding_functions']=array(
            'teaching_add_row();',
            'organization_add_row();',
            'industry_add_row();'
            );
        $data['initialize']=array(
            );
        $data['rows_calcuate']=array(
            'teaching-institution',
            'organization-institution',
            'industry-institution'
            );
        $data['form_name']='experience_form';
        $data['names']=array('teaching-institution','teaching-position','teaching-doj','teaching-dol','teaching-duration-years', 'teaching-duration-months',
            'organization-institution','organization-position','organization-doj','organization-dol','organization-duration-years','organization-duration-months',
            'industry-institution','industry-position','industry-doj','industry-dol','industry-duration-years','industry-duration-months');
        $this->_render_page_new('experience','custom_js/experience',$data);
    }
    public function submit()
    {

        if (empty($_POST))
        {
            $this->session->set_flashdata('other', validation_errors());
            redirect('recruitment/experience','refresh');
        }
        else
        {
            $value=json_encode($_POST);
            $userid=$this->ion_auth->get_user_id();
            $query=$this->recruitment_model->insert_data($userid,'experience',$value,'4');
            if($query==true)
            {
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'pdf|txt';
                $config['max_size'] = '2048';//maximum size is 1 Mb
                $config['overwrite']=TRUE;
                $this->load->library('upload',$config);
                $file_names=array('noc_pdf');
                $files_data=array();
                $all_files_upload_errors='';
                $upload_error_flag=0;

                foreach ($file_names as $key => $value) {
                    if(!isset($_FILES[$value]) )
                        continue;
                    if( !is_uploaded_file($_FILES[$value]['tmp_name'])|| !file_exists($_FILES[$value]['tmp_name']) ) {
                        continue;
                    }
                    $upload_error_flag = 0;
                    $name = $_FILES[$value]['name'];
                    $newname = str_replace(" ", "_", $name);
                    $filename = $userid.'_noc'.uniqid().'_'.$newname;
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
                    }

                }
                if($upload_error_flag==0)
                {
                    if(sizeof($files_data)!=0)
                    $this->recruitment_model->insert_file_details($files_data,'experience');
                }
                else
                {
                    $this->session->set_flashdata('danger', $all_files_upload_errors);
                    redirect('recruitment/experience','refresh');
                }

                if($this->input->post('proceed')==0)
                {
                    $this->session->set_flashdata('info', 'All form-data saved');
                    redirect('recruitment/experience','refresh');
                }
                else
                {
                    redirect('recruitment/sponsored','refresh');
                }
            }
            else
            {
                $this->session->set_flashdata('danger', 'Error in submitting data');
                redirect('recruitment/experience','refresh');

            }
        }
    }

}

/* End of file experience.php */
/* Location: ./application/modules/recruitment/controllers/experience.php */