<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DefinedSessionTime extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'defined_time', 'exam_term_id'
  ];

  /**
  * Get the exam term that this session time is defined for.
  */
  public function exam_term()
  {
    return $this->belongsTo('App\Models\ExamTerm');
  }


  /**
  * Get the exams on this time.
  */
  public function exams()
  {
    return $this->hasMany('App\Models\ExamSession');
  }
}
