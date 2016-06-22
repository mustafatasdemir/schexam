<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'code', 'name', 'description', 'is_remote', 'is_active',
    'theory_credit', 'practice_credit', 'total_credit',
    'person_id', 'department_id', 'class_year_id', 'class_term_id'
  ];


  /**
  * Get the teacher of this course.
  */
  public function teacher()
  {
    return $this->belongsTo('App\Models\Person');
  }


  /**
  * Get the department of the course.
  */
  public function department()
  {
    return $this->belongsTo('App\Models\Department');
  }


  /**
  * Get the exams defined for this course over the years.
  */
  public function exams()
  {
    return $this->hasMany('App\Models\CourseExam');
  }
}
