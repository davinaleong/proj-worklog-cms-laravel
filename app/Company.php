<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BaseModel;

class Company extends BaseModel
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'period_started_on' => 'datetime',
        'period_ended_on'   => 'datetime'
    ];

    /**
     * Returns the period_started_on in a human-readable format
     *
     * @return string
     * @throws \Exception
     */
    public function humanPeriodStartedOn()
    {
        $datetime = new \Datetime($this->attributes['period_started_on'], new \DatetimeZone($this->dateTimeZone));
        return $datetime->format($this->dateFormats['human']);
    }

    /**
     * Returns the period_ended_on in a human-readable format
     *
     * @return string
     * @throws \Exception
     */
    public function humanPeriodEndedOn()
    {
        $datetime = new \DateTime($this->attributes['period_ended_on'], new \DateTimeZone($this->dateTimeZone));

        return $datetime->format($this->dateFormats['human']);
    }
}
