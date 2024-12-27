<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    protected $header_vars = array();
    protected $body_vars = array();
    protected $footer_vars = array();

    public function __construct()
    {
        parent::__construct();      
    }
    
}

/* End of file MY_Controller.php */
/* Location: ./application/controllers/MY_Controller.php */
