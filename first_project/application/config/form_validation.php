<?php

$config = array(
    'rules' => array(
        array(
            'field' => 'company',
            'label' => 'Company',
            'rules' => 'required|min_length[5]',            
            'errors' => array(
                'required' => 'Provide {field} Name',
                'min_length' => '{field} name must be minimum {param} character'
            )
        ),
        array(
            'field' => 'phone',
            'label' => 'Phone',
            'rules' => 'required|numeric|exact_length[10]',
            'errors' => array(
                'required' => 'Provide Phone Number',
                'numeric' => 'Provide valid phone number',
                'exact_length' => 'Phone number must be 10 digits'
            )
        ),
        array(
            'field' => 'city',
            'label' => 'City',
            'rules' => "required|in_list[rajkot,surat,amdavad]",
            'errors' => array(
                'required' => 'Provide City Name',
                'in' => 'Allowed cities : rajkot,surat,amdavad'
            )
        ),
        array(
            'field' => 'state',
            'label' => 'State',
            'rules' => 'required'
        ),
    )
);



$config['error_prefix'] = '<div class="text-danger">';
$config['error_suffix'] = '</div>';
