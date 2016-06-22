<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProctorAvailability extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'person_id', 'exam_session_id', 'is_available'
  ];


  /**
  * Get the person (proctor) of this availability.
  */
  public function proctor()
  {
    return $this->belongsTo('App\Models\Person');
  }


  /**
  * Get the exam session of this availability.
  */
  public function exam_session()
  {
    return $this->belongsTo('App\Models\ExamSession');
  }
}
