<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepeatDays extends Model
{
    protected $table = 'repeat_days';

    protected $fillable = [
        'id_product',
        'days',
    ];
}
