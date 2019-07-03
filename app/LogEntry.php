<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogEntry extends Model
{
    /**
     * Returns the items of a Log Entry.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items() {
        return $this->hasMany('App\EntryItem');
    }
}
