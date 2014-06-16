<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recruitment extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
    }

    public function index()
    {
        redirect('recruitment/instructions', 'locations', 301);
    }

}

/* End of file recruitment.php */
/* Location: ./application/modules/recruitment/controllers/recruitment.php */