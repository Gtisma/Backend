<?php

namespace App\Services;


use App\Repositories\Gender\GenderRepository;


class GenderService
{
    /**
     * @var GenderRepository
     */
    protected $genderRepository;

    public function __construct(GenderRepository $genderRepository)
    {
        $this->genderRepository = $genderRepository;
    }

    public function all()
    {
        return $this->genderRepository->all();
    }



}
