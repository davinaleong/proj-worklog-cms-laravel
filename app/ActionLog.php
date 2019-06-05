<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BaseModel;

class ActionLog extends BaseModel
{
    /**
     * Set the timestamp to the current datetime (now).
     */
    public function setTimestampAttribute()
    {
        $now = \DateTime('now', new \DateTimeZone($this->dateTimeZone));
        $this->attributes['timestamp'] = $now->format($this->dateFormats['database']);
    }
}
