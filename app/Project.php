<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title_project', 'code_project'
    ];
}
