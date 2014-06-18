<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contributions extends Recruitment_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->contributions();
    }

    public function contributions()
    {
        $this->check_correct_page_landing(8);

        $data['completed']=$this->get_status();
        if($data['completed']['contributions'])
        {
            $data['saved_data']=json_decode($this->get_data('contributions'),true);
            // print_r($data['saved_data']);
        }
        $data['current_page'] = 'contributions';
        $data['scripts'] = array('contributions.js');
        $data['names']=array('attended-organization','attended-program','attended-year','attended-duration','attended-sponsor','attended-agency',
            'conducted-organization','conducted-program','conducted-year','conducted-duration','conducted-sponsor','conducted-agency',
            'FDP-faculty-organization','FDP-faculty-program','FDP-faculty-year','FDP-faculty-duration','FDP-faculty-sponsor','FDP-faculty-agency',
            'FDP-invited-faculty-organization','FDP-invited-faculty-program','FDP-invited-faculty-year','FDP-invited-faculty-duration','FDP-invited-faculty-sponsor','FDP-invited-faculty-agency'
            );
        $data['adding_functions']=array(
            'FDP_attended_add_row();',
            'FDP_conducted_add_row();',
            'FDP_faculty_add_row();',
            'FDP_invited_faculty_add_row();'
            );
        $data['initialize']=array();
        $data['form_name']='contributions_form';

        $data['rows_calcuate']=array(
            'attended-organization',
            'conducted-organization',
            'FDP-faculty-organization',
            'FDP-invited-faculty-organization'
            );

        $this->_render_page_new('contributions','custom_js/common',$data);
    }

    public function submit()
    {
        if (empty($_POST))
        {
            $this->session->set_flashdata('other', validation_errors());
            redirect('recruitment/contributions','refresh');
        }
        else
        {
            $value=json_encode($_POST);
        // print_r($value);
            $userid=$this->ion_auth->get_user_id();
            $query=$this->recruitment_model->insert_data($userid,'contributions',$value,'7');
            if($query==true)
            {
                if($this->input->post('proceed')==0)
                {
                    $this->session->set_flashdata('info', 'All form-data saved');
                    redirect('recruitment/contributions','refresh');
                }
                else
                {
                    redirect('recruitment/fee','refresh');
                }
            }
            else
            {
                $this->session->set_flashdata('danger', 'Error in submitting data');
                redirect('recruitment/contributions','refresh');

            }
        }
    }

}

/* End of file contributions.php */
/* Location: ./application/modules/recruitment/controllers/contributions.php */