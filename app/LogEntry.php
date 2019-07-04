<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogEntry extends BaseModel
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function log()
    {
        return $this->hasOne('App\User');
    }

    /**
     * Returns the items of a Log Entry.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items()
    {
        return $this->hasMany('App\EntryItem')->orderBy('created_at');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function dayType()
    {
        return $this->hasOne('App\DayType', 'code_type', 'code_type');
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function titleDay()
    {
        $date = new \DateTime('date', new \DateTimeZone($this->timezone()));
        return 'Day '.$date->format('d');
    }
}
