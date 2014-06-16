<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Research extends Recruitment_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->research();
    }

    public function research()
    {
        $this->check_correct_page_landing(6);
        $data['completed']=$this->get_status();
        if($data['completed']['research'])
        {
            $data['saved_data']=json_decode($this->get_data('research'),true);
            // $data['saved_files']=json_decode($this->get_data('research_pdf'),true);
            $data['all_saved_files']=$this->recruitment_model->get_all_files_info($this->ion_auth->get_user_id(),'research');
        }
        $data['current_page'] = 'research';
        $data['scripts'] = array('research.js');
        $data['form_name']='research_form';
        $data['adding_functions']=array(
            'phd_SCI_journal_add_row();',
            'phd_non_SCI_journal_add_row();',
            'phd_outside_SCI_journal_add_row();',
            'phd_outside_non_SCI_journal_add_row();',
            'hard_copy_peer_journal_add_row();',
            'soft_copy_peer_journal_add_row();',
            'conference_journal_add_row();',
            'book_add_row();',
            'patents_add_row();'
            );
        $data['initialize']=array();
        $data['names']=array(
            'phd-SCI-journal-coauthors','phd-SCI-journal-title','phd-SCI-journal-name','phd-SCI-journal-vol','phd-SCI-journal-year','phd-SCI-journal-citations','phd-SCI-journal-impact','phd-SCI-journal-SCI-no',
            'phd-non-SCI-journal-coauthors','phd-non-SCI-journal-title','phd-non-SCI-journal-name','phd-non-SCI-journal-vol','phd-non-SCI-journal-year','phd-non-SCI-journal-citations','phd-non-SCI-journal-impact',
            'phd-outside-SCI-journal-coauthors','phd-outside-SCI-journal-title','phd-outside-SCI-journal-name','phd-outside-SCI-journal-vol','phd-outside-SCI-journal-year','phd-outside-SCI-journal-citations','phd-outside-SCI-journal-impact','phd-outside-SCI-journal-SCI-no',
            'phd-outside-non-SCI-journal-coauthors','phd-outside-non-SCI-journal-title','phd-outside-non-SCI-journal-name','phd-outside-non-SCI-journal-vol','phd-outside-non-SCI-journal-year','phd-outside-non-SCI-journal-citations','phd-outside-non-SCI-journal-impact',
            'hard-copy-peer-journal-coauthors','hard-copy-peer-journal-title','hard-copy-peer-journal-name','hard-copy-peer-journal-vol','hard-copy-peer-journal-year','hard-copy-peer-journal-citations','hard-copy-peer-journal-impact',
            'soft-copy-peer-journal-coauthors','soft-copy-peer-journal-title','soft-copy-peer-journal-name','soft-copy-peer-journal-vol','soft-copy-peer-journal-year','soft-copy-peer-journal-citations','soft-copy-peer-journal-impact',
            'conference-journal-coauthors','conference-journal-title','conference-journal-name','conference-journal-vol','conference-journal-year','conference-journal-citations','conference-journal-impact',
            'book-coauthors','book-bc','book-title','book-publisher','book-year',
            'patents-group-or-organization','patents-name','patents-year-of-award'
            );
        $data['rows_calcuate']=array(
            'phd-SCI-journal-coauthors',
            'phd-non-SCI-journal-coauthors',
            'phd-outside-SCI-journal-coauthors',
            'phd-outside-non-SCI-journal-coauthors',
            'hard-copy-peer-journal-coauthors',
            'soft-copy-peer-journal-coauthors',
            'conference-journal-coauthors',
            'book-coauthors',
            'patents-group-or-organization'
            );
        $data['pdf_titles']=array(
            "phd-SCI-journal",
            "phd-non-SCI-journal",
            "phd-outside-SCI-journal",
            "phd-outside-non-SCI-journal",
            "hard-copy-journal",
            "soft-copy-journal",
            "conference-journal"
            );
        $this->_render_page_new('research','custom_js/common',$data);
    }

    public function delete_file_details()
    {
        $page=$this->input->post('page');
        $uid=$this->input->post('id');
        $stored_name=$this->input->post('stored_name');
        $query=$this->recruitment_model->delete_file($uid,$page);
        if($query==true)
        {

            unlink($_SERVER['DOCUMENT_ROOT'].'/faculty_recruitment/uploads/'.$stored_name);
            echo 1;
        }
        else
        {
            echo 0;
        }
    }

    public function submit()
    {

        if (empty($_POST))
        {
            $this->session->set_flashdata('other', validation_errors());
            redirect('recruitment/research','refresh');
        }
        else
        {
            echo '<div style="text-align:center;color:red;margin-top:100px;">
            <p>Uploading files and saving form data ...</p>
            <p>
                Please do not refresh or close the window.
                Page will be automatically redirected to the application.
            </p>
            </div>';
            $value=json_encode($_POST);

            $userid=$this->ion_auth->get_user_id();
            $query=$this->recruitment_model->insert_data($userid,'research',$value,'6');
            $config['upload_path'] = 'uploads/';
            $config['allowed_types'] = 'pdf|txt';
            $config['max_size'] = '1024';//maximum size is 1 Mb
            $config['overwrite']=TRUE;
            $this->load->library('upload',$config);
            $pdf_fields=array(
                "phd-SCI-journal",
                "phd-non-SCI-journal",
                "phd-outside-SCI-journal",
                "phd-outside-non-SCI-journal",
                "hard-copy-peer-journal",
                "soft-copy-peer-journal",
                "conference-journal"
                );
            if($query==true)
            {
                $upload_error_flag=0;
                $all_files_upload_errors='';
                $all_files_upload_data=array();
                foreach ($pdf_fields as $key => $value)
                {
                    $saved_files_data=array();
                    if(!isset($_FILES[$value.'-pdf'])) continue;
                    $filenames=array();
                    $size=sizeof($_FILES[$value.'-pdf']['name']);
                    $it=0;
                    foreach ($_FILES[$value.'-pdf']['name'] as $key => $name) {
                        $name=str_replace(" ", "_", $name);
                        $current_filename=$userid.'_'.$value.'_'.uniqid().'_'.$key.'_'.$name;
                        $filenames[]=$current_filename;
                        //$saved_files_data[$value][$current_filename]=$name;
                        while($it<sizeof($_POST[$value.'-pdf-upload-flag']) && $_POST[$value.'-pdf-upload-flag'][$it]=="")
                            $it++;
                        // return;
                        $file_index=$it;
                        $saved_files_data[]=array(
                            'userid'=>$userid,
                            'pdf_col'=>$value,
                            'idx'=>$file_index,
                            'original_name'=>$name,
                            'stored_name'=>$current_filename
                            );
                        $it++;
                    }
                    // print_r($saved_files_data);
                    $config['file_name']=$filenames;
                    $this->upload->initialize($config);
                    if ( ! $this->upload->do_multi_upload($value.'-pdf'))
                    {
                        $upload_error_flag=1;
                        $all_files_upload_errors .= '<p>'.$this->upload->display_errors().'</p>';
                        // print_r($all_files_upload_errors);
                    }
                    else
                    {
                        //success one array
                        $all_files_upload_data[]=$this->upload->get_multi_upload_data();
                        $query=$this->recruitment_model->insert_file_details($saved_files_data,'research');
                        if($query==FALSE)
                        {
                            $this->session->set_flashdata('danger', 'Error in uploading files and submitting their information');

                            redirect('recruitment/research','refresh');
                        }
                    }


                    if($upload_error_flag==1)
                    {
                        $this->session->set_flashdata('other', $all_files_upload_errors);
                        print_r($all_files_upload_errors);
                    }
                    else
                    {
                        //success all
                        // $files_database_val=json_encode($saved_files_data);
                        // $query2=$this->recruitment_model->insert_data($userid,'research_pdf',$files_database_val,'5');
                        // if($query2==false)
                        // {
                        //  $this->session->set_flashdata('danger', 'Error in uploading files and submitting their information');
                        //  redirect('recruitment/research','refresh');
                        // }
                        // print_r($all_files_upload_data);
                        // return;
                    }
                }
                // return;
                if($this->input->post('proceed')==0)
                {
                    $this->session->set_flashdata('info', 'All form-data and files saved');
                    redirect('recruitment/research','refresh');
                }
                else
                {
                    redirect('recruitment/contributions','refresh');
                }
            }
            else
            {
                $this->session->set_flashdata('danger', 'Error in submitting data');
                redirect('recruitment/research','refresh');

            }
        }
    }

}

/* End of file research.php */
/* Location: ./application/modules/recruitment/controllers/research.php */