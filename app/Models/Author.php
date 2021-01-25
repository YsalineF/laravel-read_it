<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    /**
     * GETTER des posts du author
     */
    public function posts() {
      return $this->hasMany('App/Models/Post');
    }
}
