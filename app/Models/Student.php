<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'name', 'surname', 'stateID', 'schoolID', 'department_id'
  ];

  /**
  * Get the department of the student.
  */
  public function department()
  {
    return $this->belongsTo('App\Models\Department');
  }

  /**
  * Get the exams that this student will take.
  */
  public function students()
  {
    return $this->belongsToMany('App\Models\CourseExam');
  }
}
