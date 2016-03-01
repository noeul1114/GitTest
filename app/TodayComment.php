<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodayComment extends Model
{
  protected $table = 'todayComments';
  protected $primaryKey = 'vote';
}
