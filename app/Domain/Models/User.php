<?php

namespace App\Domain\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Domain\Models\ModelTraits\GetsTableName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable,GetsTableName,HasRoles;


    const ID = 'id';
    const FIRST_NAME = 'first_name';
    const LAST_NAME = 'last_name';
    const EMAIL = 'email';
    const PHONE = 'phone';
    const PASSWORD = 'password';
    const PICTURE_URL = 'picture_url';
    const IS_ACTIVE = 'is_active';
    const BLOCK = 'block';
    const STATE_ID = 'state_id';
    const GENDER_ID = 'gender_id';
    const RANK_ID = 'rank_id';
    const EMAIL_VERIFIED_AT = 'email_verified_at';
    const LAST_LOGIN = 'last_login';
    const API_TOKEN = 'api_token';
    const FACEBOOK_ID = 'facebook_id';
    const TWITTER_ID = 'twitter_id';
    const GOOGLE_ID = 'google_id';
    const SOURCE = 'source';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password','picture_url','last_login'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token','email_verified_at','is_active','block','api_token','facebook_id','twitter_id','google_id'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function state()
    {
        return $this->belongsTo(State::class,self::STATE_ID);
    }
    public function rank()
    {
        return $this->belongsTo(Rank::class,self::RANK_ID);
    }
    public function gender()
    {
        return $this->belongsTo(Gender::class,self::GENDER_ID);
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

}
