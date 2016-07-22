<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassYear extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'code', 'name', 'is_active'
  ];
    /**
    * Get the students who are enrolled for this year.
    */
    public function students()
    {
      return $this->hasMany('App\Models\Student');
    }
}
