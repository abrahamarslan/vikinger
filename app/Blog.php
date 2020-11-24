<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = [];

    /**
     * A blog belongs to a user
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
    * A blog belongs to a category
    *
    */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Has-many relation with comments
     */
    public function comments() {
        return $this->hasMany(Comment::class, 'blog_id');
    }

    public function getThreadedReplies() {
        return $this->comments()->with('user')->get()->threaded();
    }
}
