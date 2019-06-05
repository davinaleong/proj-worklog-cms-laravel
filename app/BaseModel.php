<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    /**
     * Date format used to show datetime to user.
     */
    private $humanDateFormat = 'd M Y, H:i:s';

    /**
     * Default datetime zone.
     */
    private $dateTimeZone = 'Asia/Singapore';

    /**
     * Display created_at in a human-readable format.
     */
    public function humanCreatedAt()
    {
        $datetime = new \Datetime($this->attributes['created_at'], new \DatetimeZone($this->dateTimeZone));
        return $datetime->format($this->humanDateFormat);
    }

    /**
     * Display updated_at in a human-readable format.
     */
    public function humanUpdatedAt()
    {
        $datetime = new \Datetime($this->attributes['updated_at'], new \DatetimeZone($this->dateTimeZone));
        return $datetime->format($this->humanDateFormat);
    }
}
