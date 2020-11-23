<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    /**
    * A comment belongs to a blog
    *
    */
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

     /**
    * A comment belongs to a user
    *
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Has-many relation with comments (replies)
     */
    public function replies() {
        return $this->hasMany(Comment::class, 'parent_comment_id');
    }

}
