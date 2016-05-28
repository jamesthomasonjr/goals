<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     */
    protected $fillable = [
        'text',
    ];

    /**
     * Get the User associated with the Goal
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the Milestones associated with the Goal
     */
    public function milestones()
    {
        return $this->hasMany('App\Milestone');
    }

    /**
     * Get the Milestones associated with the Goal
     */
    public function progresses()
    {
        return $this->hasMany('App\Progress');
    }
}
