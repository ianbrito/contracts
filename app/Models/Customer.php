<?php

namespace App\Models;

use App\Models\Base\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'documentation',
        'email',
        'address',
        'phone',
    ];
}
