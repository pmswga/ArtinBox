<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'id_user';

    protected $fillable = [
        'name', 'email', 'password', 'id_user_type',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getUserType()
    {
        return \DB::table('users')->join('userstype', 'users.id_user_type', '=', 'userstype.id_user_type')->get()->first()->caption;

        // return $this->hasOne('App\UserType', 'id_user_type', 'id_user_type');
    }

}
