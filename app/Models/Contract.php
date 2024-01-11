<?php

namespace App\Models;

use App\Models\Base\Model;

class Contract extends Model
{
    protected $fillable = [
        'number',
        'description',
        'amount',
        'status',
        'customer_id',
        'favored_id',
    ];
}
