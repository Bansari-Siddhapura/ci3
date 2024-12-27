<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Customers_model extends Custom_model
{

    public function getCustomerNames()
    {
        $db = $this->db->select('company')->from('customer')->get();
        return $db->result();
        //dd($db);
    }

    public function get_all_data()
    {
        //$customers = $this->db->get('customer');
        $customers = $this->getRows('customer', result_type: 'array');
        return $customers;
        //return $customers->result_array();
    }

    public function show_form($id)
    {
        //dd($id);
        //$edit_row = $this->db->where('id', $id)->get('customer');
        $edit_row = $this->getSingleRow('customer', 'id=' . $id, 'array');
        return $edit_row;
    }

    public function add_customer()
    {
        $data['id'] = $this->input->post('id');
        //dd($data);
        $data['company'] = $this->input->post('company');
        $data['phone'] = $this->input->post('phone');
        $data['city'] = $this->input->post('city');
        $data['state'] = $this->input->post('state');

        // $data['id'] ? $this->db->where('id', $data['id'])->update('customer', $data) : $this->db->insert('customer', $data);
        $this->insertorupdate('customer', $data, 'id=' . $data['id']);
        redirect('welcome');
    }

    public function delete_customer($id)
    {
        //$this->db->where('id', $id)->delete('customer');
        $this->deleteRow('customer','id='.$id);
        redirect('welcome');
    }
}
