<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Applypost extends Recruitment_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->applypost();
    }

    public function applypost()
    {
        // Getting departments, specialization info
        $this->load->config('specializations');
        $data['departments'] = $this->config->item('departments');
        $data['fposts'] = $this->config->item('fposts');
        $data['sdspecializations'] = $this->config->item('sdareasofspecialization');

        // Initializaing data for new users
        if(isset($_POST['instructions']) && isset($_POST['name_of_candidate']))
        {
            $query = $this->recruitment_model->insert_data($this->user_id,'instructions',$this->input->post('name_of_candidate'),'0');
            if($query==false)
            {
                $this->session->set_flashdata('danger', 'Error in start filling form');
                redirect('recruitment/instructions','refresh');
            }
        }
        // This should be here after the above
        $this->check_correct_page_landing(2);

        $data['completed'] = $this->get_status();
        $data['filled'] = $this->get_fills();
        if($data['completed']['applypost'])
        {
            $temp = $this->get_data();
            $data['saved_data'] = json_decode($temp['applypost'],true);
            $data['pic'] = $temp['photograph'];

        }
        $data['current_page'] = 'applypost';
        $data['scripts'] = array();
        $this->_render_page('applypost',$data);
    }

    public function submit()
    {

        $value = json_encode($_POST);
        $userid = $this->user_id;
        $photograph_filename = '';

        if(isset($_FILES['photograph']) )
        {
            $config['upload_path'] = 'uploads/';
            $config['allowed_types'] = 'jpg|gif|png';
            $config['max_size'] = '2024';//maximum size is 1 Mb
            $config['overwrite'] = TRUE;
            $name = $_FILES['photograph']['name'];
            $newname = $userid."___".str_replace(" ", "_", $name);
            $config['file_name'] = $newname;
            $photograph_filename = $newname;
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('photograph'))
            {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('recruitment/applypost','refresh');
            }
        }

        $data_array=array(
            'post'=>$_POST['application_post'],
            'dept'=>$_POST['application_dept'],
            'applypost'=>$value,
        );
        // get the newly uploaded filesname.
        if ($photograph_filename !== '') {
            $data_array['photograph'] = $photograph_filename;
        }
        $query=$this->recruitment_model->update_data($userid,$data_array,'1');
        if($query==true)
        {
            if($this->input->post('proceed')==0)
            {
                $this->session->set_flashdata('info', 'All form-data saved');
                redirect('recruitment/applypost','refresh');
            }
            else
            {
                redirect('recruitment/personal','refresh');
            }
        }
        else
        {
            $this->session->set_flashdata('danger', 'Error in submitting data');
            redirect('recruitment/applypost','refresh');

        }
    }

    public function delete_photograph()
    {
        $userid=$this->ion_auth->get_user_id();
        $stored_name=$this->input->post('name');
        $query=$this->recruitment_model->delete_photograph($userid);
        if($query==true)
        {
            unlink($_SERVER['DOCUMENT_ROOT'].'/faculty_recruitment/uploads/'.$stored_name);
            echo 1;
        }
        else
        echo 0;
    }

}

/* End of file applypost.php */
/* Location: ./application/modules/recruitment/controllers/applypost.php */