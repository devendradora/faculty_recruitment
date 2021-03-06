<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
*
*/
class Recruitment_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function check_filled($userid,$field='')
	{
		if(!empty($field))
		{
			$query=$this->db->get_where('faculty_data',array('userid'=>$userid));
			if($query->num_rows()==1)
			{
				$result=$query->result_array();
				if(!empty($result[0][$field]))
					return true;
				else
					return false;
			}
			else
				return false;
		}
	}

	/*
	 * Returns status field which is a bit array
	 * It contains the status of each step in the process
	 */
	public function status($userid)
	{
		$query= $this->get_faculty_info($userid);
		if($query->num_rows()==1)
		{
			return $query->row()->status;
		}
		else
			return FALSE;
	}

	public function insert_data($userid,$field,$value,$page='0')
	{
		$data=array('userid' =>$userid ,
			$field=>$value,
			'filled_pages'=>$page
			);
		$query=$this->db->get_where('faculty_data',array('userid'=>$userid));
		if($query->num_rows()==1)
		{
			$status=$query->row()->status;
			$status[$page] = '1';
			for ($i = intval($page)+1; $i < strlen($status); $i++) {
				$status[$i] = '0';
			}
			$query2=$this->db->update('faculty_data',array('status'=>$status,$field=>$value,'filled_pages'=>$page),array('userid'=>$userid));
		}
		else
		{
			$status='000000000';
			$status[$page] = '1';
			$data['status']=$status;
			$query2=$this->db->insert('faculty_data',$data);
		}
		return $query2;
	}

	public function update_data($userid,$data,$page)
	{
		$query=$this->db->get_where('faculty_data',array('userid'=>$userid));
		if($query->num_rows()==1)
		{
			$status=$query->row()->status;
			$status[$page]=1;
			for ($i = intval($page)+1; $i < strlen($status); $i++) {
				$status[$i] = '0';
			}
			$data['status']=$status;
			$query2=$this->db->update('faculty_data',$data,array('userid'=>$userid));

		}
		else
		{
			$status='000000000';
			$status[$page]=1;
			$data['status']=$status;
			$query2=$this->db->insert('faculty_data',$data);
		}
		return $query2;

	}

	public function insert_file_details($data,$table='')
	{
		$query=$this->db->insert_batch($table.'_files',$data);
		return $query;
	}

	public function get_all_files_info($userid,$type='')
	{
		$query=$this->db->get_where($type.'_files',array('userid'=>$userid));
		if($query->num_rows()>0)
			return $query;
		else
			return FALSE;
	}

	public function delete_file($id,$type='')
	{
		$query=$this->db->delete($type.'_files',array('id'=>$id));
		return $query;
	}

	public function delete_photograph($userid)
	{
		return $this->db->update('faculty_data',array('photograph'=>''),array('userid'=>$userid));
	}

	public function final_submission($userid)
	{
		return $this->db->update('faculty_data',array(	'final_submission'=>'1'),array('userid'=>$userid));
	}

	public function get_faculty_info($userid)
	{
		return $this->db->get_where('faculty_data',array('userid'=>$userid));
	}

	public function get_email($userid)
	{   $this->db->select('email')->from('users')->where('id',$userid);
		$result= $this->db->get();
		return $result->result_array()[0];
	}
}

/* End of file recruitment_model.php */
/* Location: ./application/modules/recruitment/models/recruitment_model.php */