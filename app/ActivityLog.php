<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BaseModel;

class ActivityLog extends BaseModel
{
    const UPDATED_AT =  null;

    /**
     * Returns the user associated with the activity log.
     *
     * @return App\User
     */
    public function user()
    {
        return User::findOrFail($this->attributes['user_id']);
    }
}
