<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends BaseModel
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }

    /**
     * Returns entries of the Log.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entries() {
        return $this->hasMany('App\LogEntry')->orderByDesc('id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function year() {
        return $this->hasOne('App\Year', 'id', 'year_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function company()
    {
        return $this->hasOne('App\Company', 'code_company', 'code_company');
    }
}
