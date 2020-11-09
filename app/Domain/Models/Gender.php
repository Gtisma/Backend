<?php

namespace App\Domain\Models;

use App\Domain\Models\ModelTraits\GetsTableName;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Gender
 * @package App\Domain\Models
 * @property int id
 * @property string name
 */
class Gender extends Model
{
    use GetsTableName;

    const ID = 'id';
    const NAME = 'name';

    public function user()
    {
        return $this->hasMany(User::class);
    }

}
