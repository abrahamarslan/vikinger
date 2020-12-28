<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ftopic extends Model
{
    protected $guarded = [];

    
     /**
     * Belongs to relation with the forum category
     */
    public function category() {
        return $this->belongsTo(Fcategory::class, 'fcategory_id');
    }

    /**
     * Each topic is owned by a user (Admin)
     */
    public function admin() {
        return $this->belongsTo(User::class, 'admin_id');
    }

    /**
     * Has-many relation with forum discussions
     */
    public function discussions() {
        return $this->hasMany(Fpost::class, 'topic_id');
    }
}
