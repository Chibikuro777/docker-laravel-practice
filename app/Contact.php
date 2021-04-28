<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'last_name',
        'first_name',
        'last_name_kana',
        'first_name_kana',
        'zip',
        'address',
        'telephone',
        'email',
        'user_agent',
        'ip_address',
    ];
}
