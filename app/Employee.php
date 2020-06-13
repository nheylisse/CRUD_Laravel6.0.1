<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['empName','empPosition','dateHired','empStatus'];
    protected $primaryKey = 'id';
}
