<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('auth/ion_auth');
		if (!$this->ion_auth->logged_in())
			redirect('auth/login');
	}

	public function index()
	{
		redirect('recruitment/home');
	}

	public function _404()
	{
		$this->load->view('error/404');
	}
}