<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    /**
     * Returns entries of the Log.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entries() {
        return $this->hasMany('App\LogEntry');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function year() {
        return $this->hasOne('App\Year');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function company()
    {
        return $this->hasOne('App\Company', 'code_company');
    }
}
