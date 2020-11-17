<?php

namespace App\Services;


use App\Repositories\CrimeType\CrimeTypeRepository;


class CrimeTypeService
{
    /**
     * @var CrimeTypeRepository
     */
    protected $genderRepository;

    public function __construct(CrimeTypeRepository $crimeTypeRepository)
    {
        $this->crimeTypeRepository = $crimeTypeRepository;
    }

    public function all()
    {
        return $this->crimeTypeRepository->all();
    }



}
