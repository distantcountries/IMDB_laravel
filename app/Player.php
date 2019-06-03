<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{

    protected $fillable = [
        'first_name', 'last_name', 'email', 'team_id'
    ];
    
    const STORE_RULES = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required',
        'team_id' => 'required'
    ];
    

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
