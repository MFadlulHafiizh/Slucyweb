<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'id_user',
        'slucy_id',
        'product_name',
        'timer_set',
        'timer_until',
        'power',
        'action'
    ];
}
