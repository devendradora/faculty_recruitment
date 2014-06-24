<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
*
*/
class Main extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->steps = array(
            'instructions',
            'applypost',
            'personal',
            'educational',
            'experience',
            'sponsored',
            'research',
            'contributions',
            'fee_details',
            'report'
            );
        $this->data = $this->steps;
        $this->load->model('recruitment_model','',TRUE);
        $this->status = $this->recruitment_model->status($this->user_id);
	}
	/*
     * Checks if all the steps are complete and submitted
     *
     * TODO: SHOULD BE IN MODELS
     */
    function check_form_submitted()
    {
        $query = $this->recruitment_model->get_faculty_info($this->user_id);
        if($query->num_rows()==1)
        {
            if($query->row()->final_submission==1)
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }
        return 0;
    }
	/*
     * Get status if each step in the process
     *
     * TODO: Implement it efficiently. SHOULD BE IN MODEL
     */
    function get_status()
    {
        foreach ($this->data as $row => $value)
        {
            $data['completed'][$value] = $this->recruitment_model->check_filled($this->user_id,$value);
        }
        return $data['completed'];
    }

    /*
     * TODO: Shift to models
     */
    function get_data($field=null)
    {
        $query=$this->recruitment_model->get_faculty_info($this->user_id);

        $result=$query->result_array();
        if($field==null)
        {
            return $result[0];
        }
        return $result[0][$field];
    }
	public function index()
	{
		if($this->check_form_submitted()==0)
		{
			redirect('recruitment/fee');
		}
	}
	public function report()
	{
		$data['completed']=$this->get_status();
		$data['current_page']='report';
		$data['scripts'] = array();
		$this->_render_page('report',$data);
	}
	public function check_correct_page_landing($pageno=1)
    {
        if(!$this->status)
        {
            if (($this->status = $this->recruitment_model->status($this->user_id)) === FALSE) {
                $this->session->set_flashdata('warning', 'Click on start filling form and proceed');
                redirect('recruitment/instructions','refresh');
            }
        }
        $check_all_previous_filled=1;
        for($i=0;$i<$pageno-1;$i++)
        {
            if($this->status[$i]=='0')
            {
                $check_all_previous_filled=0;
                break;
            }
        }
        if($check_all_previous_filled==0)
        {
            $url=sprintf("recruitment/%s",$this->data[$i]);
            $this->session->set_flashdata('warning', 'Please fill this page and proceed');
            redirect($url,'refresh');
        }
    }
	public function generate_preview()
	{
		$data['current_page']='preview';
		$this->load->model('recruitment_model','',TRUE);
		$userid=$this->ion_auth->get_user_id();
		$query=$this->recruitment_model->get_faculty_info($userid);
		$this->status=$this->recruitment_model->status($userid);
		$this->check_correct_page_landing(8);
		$result=$query->result_array();
		// print_r($result);
		$data['applypost']=json_decode($result[0]['applypost'],true);
		$data['personal']=json_decode($result[0]['personal'],true);
		$data['photograph_name']=$result[0]['photograph'];
		$data['personal_lang']=
		array(
			'first_name'=>'First name',
			'gender' =>'Gender',
			'last_name' =>'Last name',
			'email_id'=>'Email ID',
			'dob' =>'Date of birth',
			'skype_id'=>'Skype Id',
			'contact_num' =>'Contact Number',
			'address_line_1' =>'Address line 1',
			'address_line_2' =>'Address line 2',
			'address_city' =>'Address city',
			'State' =>'State'
			);
		$data['education']=json_decode($result[0]['educational'],true);
		$data['tables']['experience']=array(
			'Teaching'=>'teaching',
			'Research'=>'organization',
			'Industry'=>'industry'
			);
		$data['experience']=json_decode($result[0]['experience'],true);
		$data['sponsored']=json_decode($result[0]['sponsored'],true);
		$data['research']=json_decode($result[0]['research'],true);
		// $data['all_saved_files']=$this->recruitment_model->get_all_files_info($this->ion_auth->get_user_id());
		$data['contributions']=json_decode($result[0]['contributions'],true);
		$data['fee_details']=json_decode($result[0]['fee_details'],true);
		$data['scripts'] = array();
		$data['application_no']=$data['applypost']['application_dept'].$data['applypost']['application_post'][2];
		//generate 3 digit unique number
		$digitsCount=sizeof($userid);
		for ($i=0; $i < 3-$digitsCount; $i++) { 
			$data['application_no'].='0';
		}
		$data['application_no'].=$userid;
		$this->load->view('base/header_preview', $data);
		$this->load->view('preview/application',$data);
		$this->load->view('preview/personal',$data);
		$this->load->view('preview/educational',$data);
		$this->load->view('preview/experience',$data);
		$this->load->view('preview/sponsored',$data);
		$this->load->view('preview/research',$data);
		$this->load->view('preview/contributions',$data);

		$this->load->view('base/footer', $data);
	}
	function _render_page($view, $data=null, $render=false)
	{
		$data['current_section'] = 'application';
		$data['admin_logged']=$this->ion_auth->is_admin();
		$view_html = array(
			$this->load->view('base/header', $data, $render),
			$this->load->view('recruitment/menu/header', $data, $render),
			$this->load->view('recruitment/flashdata', $data, $render),
			$this->load->view($view, $data, $render),
			$this->load->view('recruitment/menu/footer', $data, $render),
			$this->load->view('base/footer', $data, $render)
			);
		if (!$render) return $view_html;
	}
}

/* End of file main.php */
/* Location: ./application/modules/recruitment/controllers/main.php */