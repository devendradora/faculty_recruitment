<?php 
class Branches extends CI_Model{
	public function __construct()
    {
      $this->load->database();
    }
	public function get_branches(){
		$query=$this->db->get('branches');
		return $query->result();
	}
	public function getalltags(){
		$query=$this->db->get('tags');
		return $query->result();
	}
	public function get_all_questions_by_tag($tagid){
		$query=$this->db->get_where('ques_tags',array('tag_id'=>$tagid));
		return $query->num_rows();
	}
	
}

?>