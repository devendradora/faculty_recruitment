<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class site extends MX_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('functions');
		$this->functions->sec_session_start();
	}
	public function index(){
		
	}
	public function like_q(){
		$formdata=json_decode($this->input->post('formdata'),true);
		$question_id=$formdata['id'];
		$query=$this->db->query("UPDATE questions SET `votes`=`votes`+1 WHERE `q_id`=?",array($question_id));		
		echo json_encode($query);
	}

	
}
