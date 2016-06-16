<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'name', 'surname', 'phone', 'email', 'max_allowed_task',
    'is_proctor', 'is_active', 'title_id', 'department_id'
  ];

  /**
  * Get the department that this person is assigned.
  */
  public function department()
  {
    return $this->belongsTo('App\Models\Department');
  }


  /**
  * Get the title of the person.
  */
  public function title()
  {
    return $this->belongsTo('App\Models\Title');
  }

  /**
  * Get the courses of the teacher.
  */
  public function courses()
  {
    return $this->hasMany('App\Models\Course');
  }
}
