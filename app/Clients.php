<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = [
        'name',
        'birthday',
        'email',
        'phone',
        'marital_status',
        'children',
        'enterprise',
        'role',
        'address',
        'number',
        'pay',
        'academic_education',
        'medicines',
        'special_needs',
        'food',
        'allergy',
        'message',
    ];
}
/*
$table->bigIncrements('id');
$table->string('name', 150);
$table->date('birthday');
$table->string('email');
$table->string('phone');
$table->string('marital_status');
$table->string('children');
$table->string('enterprise');
$table->string('role');
$table->string('address');
$table->string('number');
$table->string('pay');
$table->string('academic_education', 150);
$table->string('medicines', 150);
$table->string('special_needs', 150);
$table->string('food', 100);
$table->string('allergy', 200);
$table->string('message');
$table->date('date_send');
$table->time('hour_send', 0);
*/
