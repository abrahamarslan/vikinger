<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fpost extends Model
{
    protected $guarded = [];
    protected $casts = [
        'body' => 'json',
        'blocks' => 'json'
    ];
    
    /**
    * Belongs to relation with the forum category
    */
   public function topic() {
       return $this->belongsTo(Ftopic::class, 'topic_id');
   }

   /**
    * Each topic is owned by a user (Admin)
    */
   public function admin() {
       return $this->belongsTo(User::class, 'admin_id');
   }

   /**
    * Each topic is owned by a user (Admin)
    */
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

   /**
    * Has-many relation with forum discussions
    */
   public function replies() {
       return $this->hasMany(Freplies::class, 'fpost_id');
   }
}
