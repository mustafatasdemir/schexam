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
    'name', 'surname', 'stateID', 'schoolID', 'department_id',
    'class_year_id', 'class_term_id'
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
  public function exams()
  {
    return $this->belongsToMany('App\Models\CourseExam');
  }

  /**
  * Get the class year of the student.
  */
  public function class_year()
  {
    return $this->belongsTo('App\Models\ClassYear');
  }

  /**
  * Get the class term of the student.
  */
  public function class_term()
  {
    return $this->belongsTo('App\Models\ClassTerm');
  }
}
