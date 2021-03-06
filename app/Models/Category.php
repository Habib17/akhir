<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    
    
  	protected $table = 'category';
  	protected $dates = ['deleted_at'];
  	protected $guarded = array('created_at', 'updated_at', 'deleted_at');

  	public function parent()
    {
        return $this->hasOne('App\Models\Category', 'parent_id', 'id');
    }

}