<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Activitylog\Traits\LogsActivity;
class User extends Authenticatable
{
    use HasRoles;
    use Notifiable;
    use LogsActivity;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','Status','roles_name'
    ];
    
    protected static $ignoreChangedAttributes = ['created_by'];
    protected static $logAttributes = ['name', 'email','password'];
    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logName = 'User';
    public function getDescriptionForEvent(string $eventName): string
    {
        return "This User has been {$eventName}";
    }
   

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
        'roles_name' => 'array',
    ];
}
