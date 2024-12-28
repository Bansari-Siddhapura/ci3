<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('custom_model');
    }

    public function index()
    {
        $data['view_page'] = "my_views";
        $data['get_rows'] = $this->custom_model->getRows('customer');
        $data['row_sorted'] = $this->custom_model->getRowsSorted('customer');
        //dd($data);
        $this->load->view('layouts/master', $data);
        //$this->load->view();
    }
}
