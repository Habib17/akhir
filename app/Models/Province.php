<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Province extends Model
{
    use SoftDeletes;
    
    
  	protected $table = 'province';
  	protected $dates = ['deleted_at'];
  	protected $guarded = array('created_at', 'updated_at', 'deleted_at');

}