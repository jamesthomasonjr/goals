<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    /**
     * Get the Goal associated with the Progress
     */
    public function goal()
    {
        return $this->belongsTo('App\Goal');
    }
}
