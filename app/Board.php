<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $table = 'boards';
    protected $primaryKey = 'vote_id';

    public function comment()
    {
        return $this->hasOne('App\Comment');
    }
}
