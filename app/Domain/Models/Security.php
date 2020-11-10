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
class Security extends Model
{
    use GetsTableName;

    const ID = 'id';
    const NAME = 'name';

    public function rank()
    {
        return $this->hasMany(Rank::class);
    }

}
