<?php

defined('BASEPATH') or exit('No direct script access allowed');

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Clients_model extends Eloquent
{
    protected $table = "customer";

    protected $fillable = [
        'id',
        'company',
        'phone',
        'city',
        'state'
    ];
}
