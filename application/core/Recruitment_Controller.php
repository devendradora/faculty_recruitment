<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recruitment_Controller extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->steps = array(
            'instructions',
            'applypost',
            'personal',
            'educational',
            'experience',
            'sponsored',
            'research',
            'contributions',
            'fee_details',
            'report'
            );
        $this->data = $this->steps;
        $this->load->model('recruitment_model','',TRUE);
        $this->status = $this->recruitment_model->status($this->user_id);
        if($this->check_form_submitted() == 1)
        {
            redirect('recruitment/main/report');
        }
    }

    /*
     * Checks if all the steps are complete and submitted
     *
     * TODO: SHOULD BE IN MODELS
     */
    function check_form_submitted()
    {
        $query = $this->recruitment_model->get_faculty_info($this->user_id);
        if($query->num_rows()==1)
        {
            if($query->row()->final_submission==1)
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }
        return 0;
    }

    /*
     * Get status if each step in the process
     *
     * TODO: Implement it efficiently. SHOULD BE IN MODEL
     */
    function get_status()
    {
        foreach ($this->data as $row => $value)
        {
            $data['completed'][$value] = $this->recruitment_model->check_filled($this->user_id,$value);
        }
        return $data['completed'];
    }

    function get_fills()
    {
        $status = $this->recruitment_model->status($this->user_id);
        $status[9] = '0';
        foreach ($this->data as $row => $value)
        {
            $t[$value] = ($status[$row] === '1')?true:false;
        }
        return $t;
    }

    /*
     * TODO: Shift to models
     */
    function get_data($field=null)
    {
        $query=$this->recruitment_model->get_faculty_info($this->user_id);

        $result=$query->result_array();
        if($field==null)
        {
            return $result[0];
        }
        return $result[0][$field];
    }

    function check_correct_page_landing($pageno=1)
    {
        if(!$this->status)
        {
            if (($this->status = $this->recruitment_model->status($this->user_id)) === FALSE) {
                $this->session->set_flashdata('warning', 'Click on start filling form and proceed');
                redirect('recruitment/instructions','refresh');
            }
        }
        $check_all_previous_filled=1;
        for($i=0;$i<$pageno-1;$i++)
        {
            if($this->status[$i]=='0')
            {
                $check_all_previous_filled=0;
                break;
            }
        }
        if($check_all_previous_filled==0)
        {
            $url=sprintf("recruitment/%s",$this->data[$i]);
            $this->session->set_flashdata('warning', 'Please fill this page and proceed');
            redirect($url,'refresh');
        }
    }

    function _render_page($view, $data=null, $render=false)
    {
        $data['current_section'] = 'application';
        $data['admin_logged'] = $this->ion_auth->is_admin();
        $view_html = array(
            $this->load->view('base/header', $data, $render),
            $this->load->view('recruitment/menu/header', $data, $render),
            $this->load->view('recruitment/flashdata', $data, $render),
            $this->load->view('recruitment/menu/progressbar2',$data,$render),
            $this->load->view($view, $data, $render),
            $this->load->view('recruitment/menu/footer', $data, $render),
            $this->load->view('base/footer', $data, $render)
            );
        if (!$render) return $view_html;
    }

    function _render_page_new($view, $custom_js,$data=null, $render=false)
    {
        $data['current_section'] = 'application';
        $data['admin_logged']=$this->ion_auth->is_admin();

        $view_html = array(
            $this->load->view('base/header', $data, $render),
            $this->load->view('recruitment/menu/header', $data, $render),
            $this->load->view('recruitment/flashdata', $data, $render),
            $this->load->view('recruitment/menu/progressbar2',$data,$render),
            $this->load->view($view, $data, $render),
            $this->load->view('recruitment/menu/footer', $data, $render),
            $this->load->view('base/footer2', $data, $render),
            $this->load->view($custom_js, $data, $render)
            );
        if (!$render) return $view_html;
    }

}

/* End of file Recruitment_Controller.php */
/* Location: ./application/core/Recruitment_Controller.php */