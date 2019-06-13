<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    /**
     * Returns a date format from the config.
     * @param $dateFormat
     * @return \Illuminate\Config\Repository|mixed
     */
    protected function dateFormat($format)
    {
        return config("date_formats.$format");
    }

    /**
     * Returns the date format for MySQL database.
     * @return \Illuminate\Config\Repository|mixed
     */
    protected function dateFormatDatabase()
    {
        return $this->dateFormat('mysql');
    }

    /**
     * Returns the timezone from app config.
     * @return \Illuminate\Config\Repository|mixed
     */
    protected function timezone()
    {
        return config('app.timezone');
    }

    /**
     * Display created_at in a human-readable format.
     */
    public function humanCreatedAt()
    {
        $datetime = new \Datetime($this->attributes['created_at'], new \DatetimeZone(config('app.timezone')));
        return $datetime->format(config('date_formats.datetime'));
    }

    /**
     * Display updated_at in a human-readable format.
     */
    public function humanUpdatedAt()
    {
        $datetime = new \Datetime($this->attributes['updated_at'], new \DatetimeZone(config('app.timezone')));
        return $datetime->format(config('date_formats.datetime'));
    }
}
