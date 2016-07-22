<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamSession extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'person_id', 'exam_term_id', 'classroom_id', 'course_exam_id',
    'defined_session_date_id', 'defined_session_time_id'
  ];

  /**
  * Get the person (proctor) assigned for this session.
  */
  public function proctor()
  {
    return $this->belongsTo('App\Models\Person');
  }

  /**
  * Get the exam term defined for this session.
  */
  public function exam_term()
  {
    return $this->belongsTo('App\Models\ExamTerm');
  }

  /**
  * Get the classroom assigned for this session.
  */
  public function classroom()
  {
    return $this->belongsTo('App\Models\Classroom');
  }

  /**
  * Get the course exam assigned for this session.
  */
  public function course_exam()
  {
    return $this->belongsTo('App\Models\CourseExam');
  }

  /**
  * Get the session date defined for this session.
  */
  public function session_date()
  {
    return $this->belongsTo('App\Models\DefinedSessionDate');
  }

  /**
  * Get the session time defined for this session.
  */
  public function session_time()
  {
    return $this->belongsTo('App\Models\DefinedSessionTime');
  }

  /**
  * Get the availabilities for this session.
  */
  public function availabilities()
  {
    return $this->hasMany('App\Models\ProctorAvailability');
  }
}
