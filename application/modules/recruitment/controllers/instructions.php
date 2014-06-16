<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Instructions extends Recruitment_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['completed'] = $this->get_status();
        if($data['completed']['instructions'])
        {
            $data['saved_data']=$this->get_data('instructions');
        }
        $data['current_page'] = 'instructions';
        $data['scripts'] = array();
        $this->_render_page('instructions',$data);
    }

}

/* End of file instructions.php */
/* Location: ./application/modules/recruitment/controllers/instructions.php */