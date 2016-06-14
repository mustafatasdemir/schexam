<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'name', 'abbreviation', 'description'
  ];

  /**
  * Get the teachers affiliated with this title.
  */
  public function teachers()
  {
    return $this->hasMany('App\Models\Person');
  }
}
