<?php

namespace App\Repositories\CrimeType;

use App\Domain\Models\CrimeType;
use App\Repositories\BaseRepository;

class CrimeTypeRepository extends BaseRepository implements ICrimeTypeRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CrimeType::class;
    }
//
}
