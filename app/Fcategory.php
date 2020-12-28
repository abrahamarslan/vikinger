<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fcategory extends Model
{
    protected $guarded = [];

    
     /**
     * Has-many relation with forum posts
     */
    public function topics() {
        return $this->hasMany(Ftopic::class, 'fcategory_id');
    }

    /**
     * Has-one relation with forum category (parent)
     */
    public function parent() {
        return $this->belongsTo(Fcategory::class, 'parent_category_id');
    }

    /**
     * Has-many relation with category (children)
     */
    public function children() {
        return $this->hasMany(Fcategory::class, 'parent_category_id');
    }
}
