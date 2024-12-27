<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        //d(parent::$body_vars);
        d($this->header_vars);
    }

    public function index()
    {
        $this->load->view('dashboard');
    }

}

/* End of file Staff.php */
/* Location: ./application/modules/staff/controllers/Staff.php */
