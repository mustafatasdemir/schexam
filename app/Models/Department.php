<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'code', 'name'
  ];


  /**
  * Get the students of this department.
  */
  public function students()
  {
    return $this->hasMany('App\Models\Student');
  }

  /**
  * Get the teachers of the department.
  */
  public function teachers()
  {
    return $this->hasMany('App\Models\Person');
  }

  /**
  * Get the courses of the department.
  */
  public function courses()
  {
    return $this->hasMany('App\Models\Course');
  }
}
