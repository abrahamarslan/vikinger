<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freplies extends Model
{
    protected $table = 'freplies';
    protected $guarded = [];

    
    /**
    * Belongs to relation with the forum category
    */
   public function post() {
       return $this->belongsTo(Ftopic::class, 'fpost_id');
   }

   /**
    * Each topic is owned by a user (Admin)
    */
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

 
}
