<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
*
*/
class Main extends MX_Controller
{

	function __construct()
	{
		$this->load->library('auth/ion_auth');
		$this->load->helper('url');
		if (!$this->ion_auth->logged_in())
			redirect('auth/login');
		$this->data=array(
			'instructions','applypost', 'personal', 'educational', 'experience', 'research', 'contributions','declaration','report'
			);
	}
	private function check_form_submitted()
	{
		$this->load->model('recruitment_model','',TRUE);
		$query=$this->recruitment_model->get_faculty_info($this->ion_auth->get_user_id());
		if($query->num_rows()==1)
		{
			if($query->row()->final_submission==1)
			{
				return 1;
			}
			else
				return 0;
		}
		return 0;
	}
	private function get_status()
	{
		$this->load->model('recruitment_model','',TRUE);
		foreach ($this->data as $row => $value) {
			$data['completed'][$value]=$this->recruitment_model->check_filled($this->ion_auth->get_user_id(),$value);
		}
		$this->status=$this->recruitment_model->status($this->ion_auth->get_user_id());
		return $data['completed'];
	}
	private function get_data($field)
	{
		$this->load->model('recruitment_model','',TRUE);
		$query=$this->recruitment_model->get_faculty_info($this->ion_auth->get_user_id());
		$result=$query->result_array();
		return $result[0][$field];
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
	public function check_correct_page_landing($pageno=1)
	{
		$check_all_previous_filled=1;
		for($i=0;$i<$pageno-1;$i++)
		{
			if($this->status[$i]=='0')
			{
				$check_all_previous_filled=0;
				break;
			}
		}
		// print_r($i);
		if($check_all_previous_filled==0)
		{
			$url=sprintf("recruitment/%s",$this->data[$i]);
			$this->session->set_flashdata('warning', 'Please fill this page and proceed');
			// print_r($url);
			redirect($url,'refresh');
		}
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
		$data['personal_lang']=
		array(
			'first_name'=>'First name',
			'gender' =>'Gender',
			'last_name' =>'Last name',
			'dob' =>'Date of birth',
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
		$data['all_saved_files']=$this->recruitment_model->get_all_files_info($this->ion_auth->get_user_id());
		$data['contributions']=json_decode($result[0]['contributions'],true);
		$data['place_date']=json_decode($result[0]['place_date'],true);
		$data['scripts'] = array();
		$this->load->view('base/header_preview', $data);
		$this->load->view('preview',$data);
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