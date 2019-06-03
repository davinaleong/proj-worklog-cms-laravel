<?php

namespace App\Models;

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
    private $humanDateFormat = 'd M Y, h:i:s';

    /**
     * Default datetime zone.
     */
    private $dateTimeZone = 'Asia/Singapore';

    /**
     * Store the encrypted password.
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    /**
     * Display created_at in a human-readable format.
     */
    public function humanCreatedAt()
    {
        $datetime = new DateTime($this->attributes['created_at'], new DateTimeZone($this::$dateTimeZone));
        return $datetime->format($this::$humanDateFormat);
    }

    /**
     * Display updated_at in a human-readable format.
     */
    public function humanUpdatedAt()
    {
        $datetime = new DateTime($this->attributes['updated_at'], new DateTimeZone($this::$dateTimeZone));
        return $datetime->format($this::$humanDateFormat);
    }

    /**
     * Display logged_in_at in a human-readable format.
     */
    public function humanLoggedInAt()
    {
        $datetime = new DateTime($this->attributes['logged_in_at'], new DateTimeZone($this::$dateTimeZone));
        return $datetime->format($this::$humanDateFormat);
    }

    /**
     * A flag to indicate whether the user has verified their email.
     */
    public function verified()
    {
        return $this->attributes['email_verified_at'] ?? true;
    }

    /**
     * Flag to indicate whether the user has been removed.
     */
    public function deleted()
    {
        return $this->attributes['deleted_at'] ?? true;
    }

}
