<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'ascape', 'source', 'finality', 'goal', 'vision', 'activities', 'place', 'next', 'amount',
    ];
}
