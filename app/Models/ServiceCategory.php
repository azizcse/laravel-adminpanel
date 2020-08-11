<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $table = 'servicecategorys';
    protected $fillable = ['service_name', 'service_description','status'];
}
