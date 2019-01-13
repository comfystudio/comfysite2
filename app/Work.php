<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $guarded = ['id'];

    public function workImages()
    {
        return $this->hasMany('App\WorkImage')->orderBy('sort', 'ASC');
    }
}
