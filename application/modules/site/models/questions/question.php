<?php
class Question extends CI_Model{
	public function __construct()
    {
      $this->load->database();
    }
    public function get_user_details($userid){
		$query=$this->db->get_where('user',array('userid' => $userid ));
		return $query;
	}
	public function getquestion_details($q_id){
		$query=$this->db->get_where('questions',array('q_id' => $q_id ));
		return $query;
	}
	public function get_answers($q_id,$limit,$offset){
		$query=$this->db->get_where('answers', array('q_id' => $q_id));
		return $query;
	}
	public function get_comments($ans_id){
		$query=$this->db->get_where('comments', array('ans_id' => $ans_id));
		return $query;
	}
} 
?>