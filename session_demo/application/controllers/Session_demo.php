<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Session_demo extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
	{
		// $this->load->view('welcome_message');
        $_SESSION['my_variable_1'] = 'Variable one';
        $_SESSION['my_variable_2'] = 'Variable one';

        
        $this->session->set_userdata('my_variable_2', "Variable 2");
        print_r($this->session->userdata('my_variable_2'));
        
        var_dump($this->session->has_userdata('my_variable_1'));

        
        $this->session->set_userdata('session_key', 'session_value');
        
        // set array of items in session
        $arraydata = array(
            'student_id'  => '01',
            'student_name'     => 'chirag jagani',
            'student_email' => 'trueline.chirag@gmail.com',
            'role' => 'student'
        );
        $this->session->set_userdata($arraydata);

        echo "<pre>";

		print_r($this->session->userdata());	

		echo "</pre>";

		echo "<b>Student id:</b> ".$this->session->userdata('student_id');

		echo "<br/>";

		echo "<b>Student Name :</b> ".$this->session->userdata('student_name');

		echo "<br/>";

		echo "<b>Student email:</b> ".$this->session->userdata('student_email');

		echo "<br/>";

		echo "<b>User Role:</b> ".$this->session->userdata('role');

		echo "<br/>";



		print_r($this->session->all_userdata()); // Read all session values

		echo "<br/>";

		//unset role

		$this->session->unset_userdata('role');

		if (!$this->session->userdata('role')) {

			echo "session role is removed";	

			echo "<br/>";

		}

		print_r($this->session->all_userdata());


        $this->session->set_flashdata('my_data_1', 'Hello World');
        $this->session->set_tempdata('my_data_2', 'tempdata 1', 30);
        
        echo "<pre>Core php<br>";
        print_r($_SESSION);
        // $this->session->sess_destroy();
        $this->session->sess_regenerate();
	}

    public function flashdata()
    {
        print_r($this->session->flashdata());
        $this->session->keep_flashdata('my_data_1');
        print_r($this->session->flashdata());
        echo "<pre>Core php<br>";
        print_r($_SESSION);
    }

    public function tempdata()
    { 
        print_r($this->session->tempdata());
        echo "<pre>Core php<br>";
        print_r($_SESSION);
    }
}
