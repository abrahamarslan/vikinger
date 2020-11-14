<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use SoftDeletes;
    protected $guarded = [];


    /*
     * From magic function (One-to-Many)
     */
    public function from() {
        return $this->belongsTo(User::class, 'from_id');
    }

    /*
     * to magic function (One-to-Many)
     */
    public function to() {
        return $this->belongsTo(User::class, 'to_id');
    }

    /*
     * Scoping by sender
     */

    public function scopeByFrom($q, $from) {
        return $q->where('from_id', $from);
    }

    /*
     * Scoping by receiver
     */

    public function scopeByTo($q, $to) {
        return $q->where('to_id', $to);
    }
}
