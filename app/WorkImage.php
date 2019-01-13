<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkImage extends Model
{
    protected $guarded = ['id'];
    public function work()
    {
        return $this->belongsTo('Work');
    }
}
