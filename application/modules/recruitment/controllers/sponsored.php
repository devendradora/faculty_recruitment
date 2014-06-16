<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sponsored extends Recruitment_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->sponsored_projects();
    }

    public function sponsored_projects()
    {
        $this->check_correct_page_landing(6);

        $data['completed']=$this->get_status();
        if($data['completed']['sponsored_projects'])
        {
            $data['saved_data']=json_decode($this->get_data('sponsored_projects'),true);
        }
        $data['current_page'] = 'sponsored_projects';
        $data['scripts'] = array('sponsored.js');
        $data['adding_functions']=array(
            'sponsored_add_row();'
            );
        $data['initialize']=array(
            );
        $data['rows_calcuate']=array(
            'sponsored_agency'
            );
        $data['form_name']='sponsored_form';
        $data['names']=array("sponsored_agency", "sponsored_coinvestigator",
        "sponsored_title","sponsored_date_of_sanction","sponsored_amount","sponsored_status");
        $this->_render_page_new('sponsored','custom_js/common',$data);
    }
    public function submit()
    {

        if (empty($_POST))
        {
            $this->session->set_flashdata('other', validation_errors());
            redirect('recruitment/sponsored','refresh');
        }
        else
        {
            $value=json_encode($_POST);
        // print_r($value);
            $userid=$this->ion_auth->get_user_id();
            $query=$this->recruitment_model->insert_data($userid,'sponsored_projects',$value,'5');
            if($query==true)
            {
                if($this->input->post('proceed')==0)
                {
                    $this->session->set_flashdata('info', 'All form-data saved');
                    redirect('recruitment/sponsored','refresh');
                }
                else
                {
                    redirect('recruitment/experience','refresh');
                }
            }
            else
            {
                $this->session->set_flashdata('danger', 'Error in submitting data');
                redirect('recruitment/sponsored','refresh');

            }
        }
    }

}

/* End of file sponsored.php */
/* Location: ./application/modules/recruitment/controllers/sponsored.php */