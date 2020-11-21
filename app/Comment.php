<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    /**
    * A blog belongs to a blog
    *
    */
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

}
