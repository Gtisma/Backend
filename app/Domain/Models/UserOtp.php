<?php

namespace App\Domain\Models;

use App\Domain\Models\ModelTraits\GetsTableName;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Security
 * @package App\Domain\Models
 * @property int id
 * @property string name
 */
class UserOtp extends Model
{
    use GetsTableName;

    const ID = 'id';
    const OTP = 'otp';
    const USER_ID = 'user_id';
    const EXPIRED_AT = 'expires_at';

    public function otp()
    {
        return $this->belongsTo(User::class,self::USER_ID);
    }

}
