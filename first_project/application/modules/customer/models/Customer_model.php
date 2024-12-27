<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Customer_model extends Custom_model
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('custom_model');
    }

    public function index()
    {
        //d($this);
        $data = $this->getRows('customer');
        dd($data);
    }
}
