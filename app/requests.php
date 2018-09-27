<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $table = 'requests';
    public $primaryKey = 'request_id';
    public $timestamps = false;
}

