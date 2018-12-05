<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Models\UsersType;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'id_user';

    protected $fillable = [
        'name', 'second_name', 'email', 'password', 'id_user_type',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getUserType()
    {
        return $this->hasOne(Models\UsersType::class, 'id_user_type', 'id_user_type')->first()['caption'];
    }

}
