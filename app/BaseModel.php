<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    /**
     * Date format used to show datetime to user.
     */
    protected $dateFormats = [
        'database' => 'Y-M-d H:i:s',
        'human' => 'd M Y, H:i:s'
    ];

    /**
     * Default datetime zone.
     */
    protected $dateTimeZone = 'Asia/Singapore';

    /**
     * Display created_at in a human-readable format.
     */
    public function humanCreatedAt()
    {
        $datetime = new \Datetime($this->attributes['created_at'], new \DatetimeZone($this->dateTimeZone));
        return $datetime->format($this->dateFormats['human']);
    }

    /**
     * Display updated_at in a human-readable format.
     */
    public function humanUpdatedAt()
    {
        $datetime = new \Datetime($this->attributes['updated_at'], new \DatetimeZone($this->dateTimeZone));
        return $datetime->format($this->dateFormats['human']);
    }
}
