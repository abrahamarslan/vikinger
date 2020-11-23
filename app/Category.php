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

    /**
     * Has-one relation with category (parent)
     */
    public function parent() {
        return $this->belongsTo(Category::class, 'parent_category_id');
    }

    /**
     * Has-many relation with category (children)
     */
    public function children() {
        return $this->hasMany(Category::class, 'parent_category_id');
    }


}
