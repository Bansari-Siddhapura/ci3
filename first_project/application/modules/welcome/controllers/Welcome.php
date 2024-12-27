<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('custom');
		$this->load->model(['customers_model', 'clients_model']);
		// d($this->footer_vars);
	}

	public function index()
	{
		//dd(collectCollection($_SERVER));
		// $data['customer_name'] = $this->customers_model->getCustomerNames();
		$data['customers'] = $this->customers_model->get_all_data();
		//$data['customers'] = Clients_model::all()->toArray();
		//dd($data);
		$this->load->view('welcome_message', $data);
	}

	public function show_form($id = null)
	{
		//dd($id);
		if ($id != null) {
			$data['edit_row'] = $this->customers_model->show_form($id);
			$this->load->view('form', $data);
		} else {
			$this->load->view('form');
		}
	}

	public function add()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('company', 'company', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('state', 'State', 'required');
		$this->form_validation->set_rules('profile', 'Profile', 'callback_upload_rule');

		//dd($this->form_validation->run());
		if ($this->form_validation->run()) {
			$this->customers_model->add_customer();
		}
		$this->load->view('form');
	}

	public function delete($id)
	{
		$this->customers_model->delete_customer($id);
	}

	//custom rule
	// public function companyname_check($str)
	// {
	// 	if ($str == 'test') {
	// 		//dd($str);
	// 		$this->form_validation->set_message('companyname_check', 'The {field} field can not be the word "test"');
	// 		return FALSE;
	// 	} else {
	// 		return TRUE;
	// 	}
	// }

	public function upload_rule()
	{
		$custom_upload_config = $this->config->load('upload');
		$this->load->library('upload', $custom_upload_config);
		if (!$this->upload->do_upload('profile')) {
			$this->form_validation->set_message('upload_rule', $this->upload->display_errors());
			return FALSE;
		} else {
			return TRUE;
		}
	}
	// public function all($name){
	// 	echo uri_string() ."<br/>";
	// 	echo "hello $name";
	// }
}
