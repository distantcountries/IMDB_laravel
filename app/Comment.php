<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post() {
        
        return $this->belongsTo(Team::class);
    }
    
    protected $fillable = [
        'content', 'user_id'
    ];
}
