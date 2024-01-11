<?php

namespace App\Models;

use App\Models\Base\Model;

class Invoice extends Model
{
    protected $fillable = [
        'identification',
        'description',
        'amount',
        'content',
        'due_date',
        'reference_id',
        'contract_id',
    ];
}
