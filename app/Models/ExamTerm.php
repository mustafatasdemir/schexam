<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamTerm extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'code', 'name', 'description', 'start_date', 'end_date'
  ];


  /**
  * Get the exam session dates defined for this exam term.
  */
  public function session_dates()
  {
    return $this->hasMany('App\Models\DefinedSessionDate');
  }


  /**
  * Get the exam session dates times for this exam term.
  */
  public function session_times()
  {
    return $this->hasMany('App\Models\DefinedSessionTime');
  }


  /**
  * Get the exams defined for this term.
  */
  public function exams()
  {
    return $this->hasMany('App\Models\CourseExam');
  }
}
