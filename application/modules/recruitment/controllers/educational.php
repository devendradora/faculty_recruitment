<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Educational extends Recruitment_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->educational();
    }

    public function educational()
    {
        $this->check_correct_page_landing(4);
        // get first, second degree, specializations for populating options
        $this->load->config('specializations');
        $data['fdegree'] = $this->config->item('fdegree');
        $data['fdbranch'] = $this->config->item('fdbranch');
        $data['sdegree'] = $this->config->item('sdegree');
        $data['sdspecialization'] = $this->config->item('sdspecialization');
        $data['sdareasofspecialization'] = $this->config->item('sdareasofspecialization');


        $data['completed']=$this->get_status();
        // get department & faculty post applied for
        if($data['completed']['applypost'])
        {
            $temp_data=$this->get_data();
            $data['post']=$temp_data['post'];
            $data['dept']=$temp_data['dept'];
        }
        // If already filled get all fields
        if($data['completed']['educational'])
        {
            $data['saved_data']=json_decode($this->get_data('educational'),true);
        }

        $data['adding_functions']=array(
            'schooling_add_row();',
            'undergraduation_add_row();',
            'masters_add_row();',
            // 'graduation_add_row();',
            'phd_awarded_add_row();',
            'phd_pursuing_add_row();'
            );
        $data['initialize']=array('0','1');
        $data['names']=array(
            'schooling_certificate',
            'schooling_boardu',
            'schooling_yopass',
            'schooling_percentage',
            'undergraduation_degree', 'undergraduation_subject', 'undergraduation_boardu', 'undergraduation_yopass', 'undergraduation_division','undergraduation_percentage','undergraduation_score',
            'masters_degree','masters_subject','masters_specialization','masters_boardu', 'masters_yopass','masters_division', 'masters_percentage','masters_score',
            'phd_month_year', 'phd_awarded_institution', 'phd_awarded_department', 'phd_thesis',
            'phd_dor', 'phd_pursuing_institution', 'phd_pursuing_department', 'phd_submission_synopsis','phd_submission_synopsis_date','phd_submission_thesis','phd_submission_thesis_date'
            );

        $data['rows_calcuate']=array(
            'schooling_certificate',
            'undergraduation_degree',
            'masters_degree',
            // 'graduation_degree',
            'phd_month_year',
            'phd_dor'
            );

        $data['form_name']='education_form';
        $data['current_page'] = 'educational';
        $data['scripts'] = array('educational.js');
        $this->_render_page_new('educational','custom_js/common',$data);
    }
    public function submit()
    {

        if (empty($_POST))
        {
            $this->session->set_flashdata('other', validation_errors());
            redirect('recruitment/educational','refresh');
        }
        else
        {
            $value=json_encode($_POST);
            $userid=$this->ion_auth->get_user_id();
            $query=$this->recruitment_model->insert_data($userid,'educational',$value,'3');
            if($query==true)
            {
                if($this->input->post('proceed')==0)
                {
                    $this->session->set_flashdata('info', 'All form-data saved');
                    redirect('recruitment/educational','refresh');
                }
                else
                {
                    redirect('recruitment/experience','refresh');
                }
            }
            else
            {
                $this->session->set_flashdata('danger', 'Error in submitting data');
                redirect('recruitment/educational','refresh');

            }
        }
    }

}

/* End of file educational.php */
/* Location: ./application/modules/recruitment/controllers/educational.php */