<?php 
/**
* All login functions and session handling
*/
class Functions extends CI_Model
{
    
    public function __construct()
    {
      $this->load->database();
    }
    public function submitform()
    {
      $firstname=$this->input->post('firstname');
      $lastname=$this->input->post('lastname');
      $country=$this->input->post('country');
      $gender=$this->input->post('gender');
      $emailid=$this->input->post('emailid');
      $designation=$this->input->post('lastname');
      $organization='';
      if($designation==='Student')
        $organization=$this->input->post('college');
      else if($designation==='Professional')
        $organization=$this->input->post('organization');
      $month=$this->input->post('month');
      $day=$this->input->post('day');
      $year=$this->input->post('year');
      $dob=$month."-".$day."-".$year;
      $aboutme=$this->input->post('aboutme');
      if($gender=='Female')
      {
        $image="<?php echo (IMG.'Profile_icon_female.jpg');?>";
      }
      else
      {
        $image="<?php echo (IMG.'Profile_icon_male.jpg');?>";
      }
      $userid=$firstname.$lastname.time();
      //$userid=uniqid($userid,true);

      $password=$this->input->post('password');
      $random_salt=hash('sha512',uniqid(mt_rand(1,mt_getrandmax()),true));
      $password=hash('sha512',$password.$random_salt);

      $branch['aeronautics']=-1;
      $branch['biotech']=-1;
      $branch['chemical']=-1;
      $branch['civil']=-1;
      $branch['cse']=-1;
      $branch['ece']=-1;
      $branch['eee']=-1;
      $branch['mech']=-1;
      $branch['meta']=-1;

      foreach($this->input->post('b') as $field)
      {
        $branch[$field]=1;
      }

      $data=array(
          'userid'=>$userid,
          'firstname'=>$firstname,
          'lastname'=>$lastname,
          'dob'=>$dob,
          'country'=>$country,
          'gender'=>$gender,
          'emailid'=>$emailid,
          'organization'=>$organization,
          'designation'=>$designation,
          'info'=>$aboutme,
          'followedby'=>0,
          'follow'=>0,
          'password'=>$password,
          'salt' =>$random_salt,
          'score'=>0,
          'question_badge'=>0,
          'answer_badge'=>0,
          'likes'=>0,
          'image'=>$image
        );
      $this->db->insert('user',$data);

      $data2=array(
          'userid'=>$userid,
          'aeronautics'=>$branch['aeronautics'],
          'biotech'=>$branch['biotech'],
          'chemical'=>$branch['chemical'],
          'civil'=>$branch['civil'],
          'cse'=>$branch['cse'],
          'ece'=>$branch['ece'],
          'eee'=>$branch['eee'],
          'mech'=>$branch['mech'],
          'meta'=>$branch['meta'],
          'count'=>0
        );
      $this->db->insert('branch_details',$data2);
    }
  public function check_user($email,$password){
    $query=$this->db->get_where('user',array('emailid'=>$email));
    if($query->num_rows()==1){
      $row=$query->row();
      $user_id=$row->userid;
      $salt=$row->salt;
      $username=$row->firstname.' '.$row->lastname;
      $db_password=$row->password; 

      $password = hash('sha512', $password.$salt); // hash the password with the unique salt.
      if($db_password==$password){ //database password matches with the password hashes
       $user_browser = $_SERVER['HTTP_USER_AGENT']; // Get the user-agent string of the user.
       //$user_id = preg_replace("/[^0-9]+/", "", $user_id); // XSS protection as we might print this value
       $_SESSION['user_id'] = $user_id; 
       //$username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username); // XSS protection as we might print this value
       $_SESSION['username'] = $username;
       $_SESSION['login_string'] = hash('sha512', $password.$user_browser);
       // Login successful.
       return true;
      }else{
        return false; //password mismatch
      }
    
    }
    else{
      return false; //user not registered
    }
}
public function sec_session_start() {
        $session_name = 'sec_session_id'; // Set a custom session name
        $secure = false; // Set to true if using https.
        $httponly = true; // This stops javascript being able to access the session id. 
 
        ini_set('session.use_only_cookies', 1); // Forces sessions to only use cookies. 
        $cookieParams = session_get_cookie_params(); // Gets current cookies params.
        session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly); 
        session_name($session_name); // Sets the session name to the one set above.
        session_start(); // Start the php session
        session_regenerate_id(); // regenerated the session, delete the old one.  
      }
public function is_loggedin() {
   // Check if all session variables are set
   if(isset($_SESSION['user_id'], $_SESSION['username'], $_SESSION['login_string'])) {
     $user_id = $_SESSION['user_id'];
     $login_string = $_SESSION['login_string'];
     $username = $_SESSION['username'];
 
     $user_browser = $_SERVER['HTTP_USER_AGENT']; // Get the user-agent string of the user.
     $query=$this->db->get_where('user',array('userid'=>$user_id));

        if($query->num_rows() == 1) { // If the user exists
           $row=$query->row();
           $password=$row->password;
           $login_check = hash('sha512', $password.$user_browser);
           if($login_check == $login_string) {
              // Logged In!!!!
              return true;
           } else {
              // Not logged in
              return false;
           }
        } else {
            // Not logged in
            return false;
        }
  }
  else{
    return false; //session not set
  }
}
}
?>