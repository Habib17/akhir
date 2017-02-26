<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderStatus extends Model
{
    use SoftDeletes;
    
    
  	protected $table = 'order_status';
  	protected $dates = ['deleted_at'];
  	protected $guarded = array('created_at', 'updated_at', 'deleted_at');

}