<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Customers_model extends CI_Model
{

    public function getCustomerNames()
    {
        $db = $this->db->select('company')->from('customer')->get();
        return $db->result();
        //dd($db);
    }

    public function get_all_data()
    {
        $customers = $this->db->get('customer');
        return $customers->result_array();
    }

    public function show_form($id)
    {
        $edit_row = $this->db->where('id', $id)->get('customer');
        return $edit_row->result_array();
    }

    public function add_customer()
    {
        $data['id'] = $this->input->post('id');
        $data['company'] = $this->input->post('company');
        $data['phone'] = $this->input->post('phone');
        $data['city'] = $this->input->post('city');
        $data['state'] = $this->input->post('state');

        $data['id'] ? $this->db->where('id', $data['id'])->update('customer', $data) : $this->db->insert('customer', $data);
        redirect('welcome');
    }

    public function delete_customer($id)
    {
        $this->db->where('id', $id)->delete('customer');
        redirect('welcome');
    }
}
