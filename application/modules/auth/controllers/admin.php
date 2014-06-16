<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Admin extends MX_Controller
{
	
	function __construct()
	{
		$this->load->library('auth/ion_auth');
		if (!$this->ion_auth->logged_in())
			redirect('auth/login');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}
	public function remove_final_submission($userid)
	{
		if(empty($userid)||!$this->ion_auth->is_admin())
			redirect('auth','refresh');
		$this->load->model('user_data_model');
		$query=$this->user_data_model->remove_submission($userid);
		if($query==true)
		{
			$this->session->flashdata('message','Final submission for user id'.$userid.'is removed');
			redirect('auth','refresh');
			
		}
		else
		{
			$this->session->flashdata('message','Final submission for user id'.$userid.'cannot be removed');	
			redirect('auth','refresh');
		}

	}
}

/* End of file admin.php */
/* Location: ./application/modules/auth/controllers/admin.php */