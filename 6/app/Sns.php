<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sns extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'body' => 'required',
        'user_id' => 'required',
    );
}
