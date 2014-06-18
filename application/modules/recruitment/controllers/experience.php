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
        // print_r($value);
            $userid=$this->ion_auth->get_user_id();
            $query=$this->recruitment_model->insert_data($userid,'experience',$value,'4');
            if($query==true)
            {
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