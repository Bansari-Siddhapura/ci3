<?php
base_url('assets/css/bootstrap.min.css');

site_url('assets/css/bootstrap.min.css');
current_url();

heading('welcome', 1, 'class=text-danger');

echo "first page";
echo br(2);
echo index_page();
// redirect('/welcome')
echo nbs(50);

$image_properties = array(
    'src'   => 'assets/images/friends.png',
    'alt'   => 'Me, demonstrating how to eat 4 slices of pizza at one time',
    'class' => 'post_images',
    'width' => '200',
    'height' => '200',
    'title' => 'That was quite a night',
    'rel'   => 'lightbox'
);

echo img($image_properties);

echo link_tag('assets/css/bootstrap.min.css');


//echo form_open('/index.php/first');
echo form_open_multipart('/index.php/first');

echo form_input('username', 'abc');

echo form_password('pass', '123');

echo form_upload('profile');

$options = array('rajkot', 'surat', 'vadodra');
echo form_dropdown('city', $options);

echo form_multiselect('skills', $options);

echo form_close();

if (valid_email('example@gmail.com')) {
    echo "valid email";
} else {
    echo "email does not valid";
}

echo br(3);
echo now();

echo br(3);
$datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
$time = time();
echo mdate($datestring, $time);

echo br(3);
echo days_in_month(11, 2024);

echo br(3);
$range = date_range('2012-01-01', '2012-01-15');
echo "First 15 days of 2012:";
foreach ($range as $date) {
    echo $date . "<br/>";
}

echo timezones('UM8');

echo br(3);
echo sanitize_filename('hasuiadasfsd654//jasdoiw./oiwa');


echo encode_php_tags('<h1>tagss</h1>');
