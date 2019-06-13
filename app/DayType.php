<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DayType extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title_type', 'code_type', 'icon_fa', 'color_hex'
    ];
}
