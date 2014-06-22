<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
*
*/
class Main extends Recruitment_Controller
{

	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		if($this->check_form_submitted()==0)
		{
			redirect('recruitment/fee');
		}
		$data['completed']=$this->get_status();
		$data['current_page']='report';
		$data['scripts'] = array();
		$this->_render_page('report',$data);
	}
	public function generate_preview()
	{
		$data['current_page']='preview';
		$this->load->model('recruitment_model','',TRUE);
		$query=$this->recruitment_model->get_faculty_info($this->ion_auth->get_user_id());
		$this->status=$this->recruitment_model->status($this->ion_auth->get_user_id());
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

		$data['research']=json_decode($result[0]['research'],true);
		// $data['all_saved_files']=$this->recruitment_model->get_all_files_info($this->ion_auth->get_user_id());
		$data['contributions']=json_decode($result[0]['contributions'],true);
		$data['fee_details']=json_decode($result[0]['fee_details'],true);
		$data['scripts'] = array();
		$this->load->view('base/header_preview', $data);
		$this->load->view('preview/application',$data);
		$this->load->view('preview/personal',$data);
		$this->load->view('preview/educational',$data);
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