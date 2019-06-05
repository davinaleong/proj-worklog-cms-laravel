<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'photo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'logged_in_at'      => 'datetime'
    ];

    /**
     * Date format used to show datetime to user.
     */
    private $humanDateFormat = 'd M Y, H:i:s';

    /**
     * Default datetime zone.
     */
    private $dateTimeZone = 'Asia/Singapore';

    /**
     * Store the encrypted password.
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt('ent3r1n');
    }

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

    /**
     * Display logged_in_at in a human-readable format.
     */
    public function humanLoggedInAt()
    {
        $datetime = new \DateTime($this->attributes['logged_in_at'], new \DateTimeZone($this->dateTimeZone));
        return $datetime->format($this->humanDateFormat);
    }

    /**
     * A flag to indicate whether the user has verified their email.
     */
    public function isVerified()
    {
        return isset($this->attributes['email_verified_at']) ? true : false;
    }

    /**
     * Flag to indicate whether the user has been removed.
     */
    public function isDeleted()
    {
        return isset($this->attributes['deleted_at']) ? true : false;
    }

}
