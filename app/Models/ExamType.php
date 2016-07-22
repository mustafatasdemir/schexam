<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamType extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'code', 'name', 'description'
  ];

  /**
  * Get the exams of this type.
  */
  public function exams()
  {
    return $this->hasMany('App\Models\CourseExam');
  }
}
