<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BaseModel;

class Company extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title_company', 'code_company', 'period_started_on', 'period_ended_on'
    ];

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
        $datetime = new \Datetime($this->attributes['period_started_on'], new \DatetimeZone($this->timezone()));
        return $datetime->format($this->dateFormat('date_only'));
    }

    /**
     * Returns the period_started_on in a human-readable format
     *
     * @return string
     * @throws \Exception
     */
    public function fieldPeriodStartedOn()
    {
        $datetime = new \Datetime($this->attributes['period_started_on'], new \DatetimeZone($this->timezone()));
        return $datetime->format($this->dateFormat('field_date'));
    }

    /**
     * Returns the period_ended_on in a human-readable format
     *
     * @return string
     * @throws \Exception
     */
    public function humanPeriodEndedOn()
    {
        $datetime = new \DateTime($this->attributes['period_ended_on'], new \DateTimeZone($this->timezone()));

        return $datetime->format($this->dateFormat('date_only'));
    }

    /**
     * Returns the period_ended_on in a human-readable format
     *
     * @return string
     * @throws \Exception
     */
    public function fieldPeriodEndedOn()
    {
        $datetime = new \DateTime($this->attributes['period_ended_on'], new \DateTimeZone($this->timezone()));

        return $datetime->format($this->dateFormat('field_date'));
    }
}
