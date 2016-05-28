<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    /**
     * Get the Goal associated with the Milestone
     */
    public function goal()
    {
        return $this->belongsTo('App\Goal');
    }
}
