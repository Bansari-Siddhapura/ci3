<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('custom');
		$this->load->model(['customers_model', 'clients_model'], '', TRUE);
	}

	public function index()
	{
		//dd(collectCollection($_SERVER));

		// $data['customer_name'] = $this->customers_model->getCustomerNames();
		// $data['customers'] = $this->customers_model->get_all_data();
		$data['customers'] = Clients_model::all()->toArray();
		//dd($data);
		$this->load->view('welcome_message', $data);
	}

	public function show_form($id = null)
	{
		if ($id != null) {
			$data['edit_row'] = $this->customers_model->show_form($id);
			$this->load->view('form', $data);
		} else {
			$this->load->view('form');
		}
	}

	public function add()
	{
		$this->customers_model->add_customer();
	}

	public function delete($id)
	{
		$this->customers_model->delete_customer($id);
	}

	// public function all($name){
	// 	echo uri_string() ."<br/>";
	// 	echo "hello $name";
	// }
}

// $obj = new Welcome();