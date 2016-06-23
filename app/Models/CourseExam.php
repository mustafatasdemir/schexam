<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseExam extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'duration', 'course_id', 'exam_term_id', 'exam_type_id'
  ];

  /**
  * Get the students who will take this exam.
  */
  public function students()
  {
    return $this->belongsToMany('App\Models\Student');
  }

  /**
  * Get the course.
  */
  public function course()
  {
    return $this->belongsTo('App\Models\Course');
  }

  /**
  * Get the exam term.
  */
  public function exam_term()
  {
    return $this->belongsTo('App\Models\ExamTerm');
  }

  /**
  * Get the exam type.
  */
  public function exam_type()
  {
    return $this->belongsTo('App\Models\ExamType');
  }
}
