<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fee extends Recruitment_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->fee_details();
    }

    public function fee_details()
    {
        $this->check_correct_page_landing(9);

        $data['completed']=$this->get_status();
        $data['filled'] = $this->get_fills();
        if($data['completed']['personal'])
        {
            //getting category
            $temp=json_decode($this->get_data('personal'),true);

            $data['category']=$temp['category'];
        }
        $data['current_page']='fee_details';
        if($data['completed']['fee_details'])
        {
            $data['saved_data']=json_decode($this->get_data('fee_details'),true);

            //print_r($data['saved_data']);
        }
        
        $data['scripts'] = array('fee_details.js');
        $this->_render_page('fee_details',$data);
    }
    public function submit()
    {
        if (empty($_POST))
        {
            $this->session->set_flashdata('other', validation_errors());
            redirect('recruitment/fee_details','refresh');
        }
        else
        {

            $value=json_encode($_POST);
            $userid=$this->ion_auth->get_user_id();
            $query=$this->recruitment_model->insert_data($userid,'fee_details',$value,'8');
           
            if($query==true)
            {
                if($this->input->post('proceed')==0)
                {
                    $this->session->set_flashdata('info', 'All form-data saved');
                    redirect('recruitment/fee','refresh');
                }
                else
                {
                    redirect('recruitment/submission','refresh');
                }
            }
            else
            {
                $this->session->set_flashdata('danger', 'Error in submitting data');
                redirect('recruitment/fee','refresh');

            }
            

        }
    }

}

/* End of file fee.php */
/* Location: ./application/modules/recruitment/controllers/fee.php */