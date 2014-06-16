<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('functions');
		$this->functions->sec_session_start();
	}
	public function index(){
		
	}
	public function register(){
		$prev=$_SERVER['HTTP_REFERER'];
		if($this->functions->is_loggedin()){
			$this->profile();
		}
		else{
		$this->load->view("start_page",array("title"=>"Registration"));
		$this->load->view("navbar");
		$this->load->view("register");
		$this->load->view("questions/footer");
		$this->load->view("register_script");
		}
	}
	public function registration_submit(){
			$error=TRUE;
			$data['result']='';
			$this->form_validation->set_rules('firstname', 'name', 'required');
			$this->form_validation->set_rules('emailid', 'Email address', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required');
			$this->form_validation->set_rules('optionsradios', '', 'required');
			
			if ($this->form_validation->run() === FALSE)
			{
				$data['result']='';
				$error=FALSE;
			}
			else if($_POST['password'] !== $_POST['confirm_password'])
			{
				$data['result']="Passwords don't match";
				$error=FALSE;
			}
			else
			{
				$error=FALSE;
				foreach ($_POST['b'] as $field) 
				{
					$error=TRUE;
				}
			}

			if($error===TRUE)
			{
				$this->load->model('functions','registrationform');
				$this->registrationform->submitform();
				$data['result']='You registered successfully';
				$this->load->view('start_page');
				$this->load->view('navbar');

				$this->load->view('success',$data);
				$this->load->view('questions/footer');
			}
			else
			{
				$this->load->view('start_page');
				$this->load->view('navbar');
				$this->load->view('failure',$data);
				$this->load->view('questions/footer');
			}
	}
	public function login(){
		//echo $this->functions->is_loggedin();
		$prev=$_SERVER['HTTP_REFERER'];
		if($this->functions->is_loggedin()){
			$this->profile();
		}
		else{
	   	$previous_page= $_SERVER['HTTP_REFERER'];
		$this->load->view("login");
		}
	}
	public function submit_question(){
		$post_array=$this->input->post();
		// 'q_branch'=>$post_array['branch'],
		// 'q_tags'=>$post_array['tagsinput'],
		$data = array(
			'q_brief' => $post_array['title'],
		 	'q_detail'=> $post_array['ques'],
			'user_id'=> $_SESSION['user_id'],
			'q_date'=>date('Y-m-d')
		 	);
		$query=$this->db->insert('questions',$data);
	}
	public function ask_question(){
		$this->load->view("start_page",array("title"=>"Forum | Main Page"));
		$data['logged']=$this->functions->is_loggedin();
		$this->load->view("navbar",$data);
		$this->load->view("ask_question/ask");
		$this->load->view("questions/footer");
		$this->load->view('ask_question/script');
	}
	public function home(){
		$this->load->model('branches','',TRUE);
		$data['query']=$this->branches->get_branches();
		$this->load->view("start_page",array("title"=>"Forum | Main Page"));
		$data['logged']=$this->functions->is_loggedin();
		$this->load->view("navbar",$data);
		$this->load->view("home",$data);
		$this->load->view("questions/footer");
	}
	public function check_login(){
		$this->load->helper('form');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('pwd', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            ','</div>');
		if($this->form_validation->run() == FALSE)
		{
			$this->login();
		}
		else
		{
			$status=$this->functions->check_user($this->input->post('email'),$this->input->post('pwd'));
			//echo $status;
			if($status==true)
				$this->profile();
				//redirect($page);
			else
				$this->login();
		}
	}
	public function profile(){
		echo "logged in";
	}
	private function initialise($title){
		$this->load->view("start_page",array('title'=>$title));
		$data['logged']=$this->functions->is_loggedin();			
		$this->load->view("navbar",$data);
	}
	public function tags(){
		$this->initialise("Tags | Discussion Forum");
		$this->load->model('branches');
		$data['tags']=$this->branches->getalltags();
		$questions_data=array();
		foreach($data['tags'] as $row){
			$tag_id=$row->tag_id;
			$questions_related=$this->branches->get_all_questions_by_tag($tag_id);
			$questions_data[$tag_id]=$questions_related;
		}
		$data['question_tags']=$questions_data;

		$this->load->view('tags/tag',$data);
		$this->load->view('questions/footer');
		$this->load->view('tags/script');
	}
	public function retrieve_tags_data(){
		$formdata=json_decode($this->input->post('formdata'),true);
		$tag_name=$formdata['tag_name'];
		$this->load->model('branches');
		$data['tags']=$this->branches->getalltags();
		$matched_tags=array();
		foreach($data['tags'] as $row){
		
			if (strpos($row->tag_details,$tag_name) !== false) {
    			$matched_tags[$row->tag_id]=$row->tag_details;
			}
		}
		echo json_encode($matched_tags);
	}
	
	public function question_page($q_id){

		$this->load->model("questions/question");
		$query=$this->question->getquestion_details($q_id);
		if($query->num_rows()==1){ //question exists
				$row=$query->row();
	    		$data['result']=$row;
	    		$data['user_asked']=$this->question->get_user_details($row->user_id)->row();
		}
		$data['logged']=$this->functions->is_loggedin();			
		$this->load->view("questions/header",$data);
		$this->load->view("navigation");
		$this->load->view("questions/question",$data);
		// load answers
		$query=$this->question->get_answers($q_id,5,0);
		if($query->num_rows()>0){ //answers exists
			foreach ($query->result() as $row){
	    		$data['ans']=$row;
	    		$query_comments=$this->question->get_comments($row->ans_id);
	    		$data['numrows']=$query_comments->num_rows();
	    		$data['answered_by']=$this->question->get_user_details($row->user_id)->row();
	    		$this->load->view("questions/answers",$data);
	    		foreach ($query_comments->result() as $comment_row){
	    			$data['comment']=$comment_row;
	    			$data['commented_by']=$this->question->get_user_details($comment_row->user_id)->row();
	    			$this->load->view("questions/comments",$data);
				}
				$this->load->view("questions/add_comments",$data);
			}
		}
		if($data['logged'])
			$this->load->view("questions/add_answer");
		else
			$this->load->view("questions/gutter");
		$this->load->view("questions/footer");
		$this->load->view("questions/script");
		
	}
	public function like_q(){
		$formdata=json_decode($this->input->post('formdata'),true);
		$question_id=$formdata['id'];
		//echo $question_id;
		$query=$this->db->query("UPDATE questions SET `votes`=`votes`+1 WHERE `q_id`=?",array($question_id));
		
		echo json_encode($query);
	}
	public function logout()
	{
		$this->load->helper('url');
		// Unset all session values
		$_SESSION = array();
		// get session parameters 
		$params = session_get_cookie_params();
		// Delete the actual cookie.
		setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
		// Destroy session
		session_destroy();
		header('Location: '.URL_HOME.'home');
	}
}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */