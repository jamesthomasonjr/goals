<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'text',
    ];

    /**
     * Get the Goal associated with the Milestone
     */
    public function goal()
    {
        return $this->belongsTo('App\Goal');
    }
}
