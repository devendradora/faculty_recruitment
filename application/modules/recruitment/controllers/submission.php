<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Submission extends Recruitment_Controller {

	public function index()
	{
        $this->check_correct_page_landing(10);

        $data['completed']=$this->get_status();
        $data['filled'] = $this->get_fills();
        if($data['completed']['personal'])
        {
            //getting category
            $temp=json_decode($this->get_data('personal'),true);
            $data['category']=$temp['category'];
        }
        $data['current_page']='submission';
      
       $data['saved_data']=json_decode($this->get_data('submission_det'),true);

       
 		$this->_render_page('submission',$data);
		
	}
 	

 	public function final_submit()
    {
        if (empty($_POST))
        {
            $this->session->set_flashdata('other', validation_errors());
            redirect('recruitment/submission','refresh');
        }
        else
        {
            $value=json_encode($_POST);            
            $userid=$this->ion_auth->get_user_id();
            $query=$this->recruitment_model->insert_data($userid,'submission_det',$value,'9');
            $this->status=$this->recruitment_model->status($this->ion_auth->get_user_id());
            if($query==true)
            {
                if($this->status=="111111111")
                {
                    $query2=$this->recruitment_model->final_submission($userid);
                    if($query2==true)
                    {
                        redirect('recruitment/main/report','refresh');
                    }
                    else
                    {
                        $this->session->set_flashdata('danger', 'Error in final submission');
                        redirect('recruitment/submission','refresh');
                    }
                }
                else
                {
                    $this->session->set_flashdata('danger', "Fill all the previous pages");
                    // print_r($this->status);
                    redirect('recruitment/submission','refresh');
                }
            }

        }
    }

}

/* End of file submission.php */
/* Location: ./application/modules/recruitment/controllers/submission.php */