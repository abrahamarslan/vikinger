<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

     /**
     * Has-many relation with blog
     */
    public function blogs() {
        return $this->hasMany(Blog::class, 'category_id');
    }
}
