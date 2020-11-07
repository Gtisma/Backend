<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Domain\Models\ModelTraits\GetsTableName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable,GetsTableName,HasRoles;


    const ID = 'id';
    const NAME = 'name';
    const LAST_NAME = 'last_name';
    const EMAIL = 'email';
    const PASSWORD = 'password';
    const AVATAR = 'avatar';
    const IS_OWNER = 'is_owner';
    const EMAIL_VERIFIED_AT = 'email_verified_at';
    const DATE_OF_BIRTH = 'date_of_birth';
    const COUNTRY = 'country';
    const CITY = 'city';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
