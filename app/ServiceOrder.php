<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
	protected $table = 'serviceorders';
    protected $fillable = ['name','phone','address','service','details'];
}
