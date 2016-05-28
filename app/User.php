<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the Goals associated with the User
     */
    public function goals()
    {
        return $this->hasMany('App\Goal');
    }

    /**
     * Get the Milestones associated with the User
     */
    public function milestones()
    {
        return $this->hasManyThrough('App\Milestone', 'App\Goal');
    }

    /**
     * Get the Progresses associated with the User
     */
    public function progresses()
    {
        return $this->hasManyThrough('App\Progress', 'App\Goal');
    }
}
