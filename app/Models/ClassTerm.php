<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassTerm extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'code', 'name', 'is_active'
  ];
}
