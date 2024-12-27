<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('customer_model');
    }

    public function index(){
        $this->customer_model->index();
    }

}
