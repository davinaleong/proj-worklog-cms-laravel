<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title_year'
    ];
}
