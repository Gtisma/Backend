<?php

namespace App\Services;


use App\Repositories\State\StateRepository;


class StateService
{
    /**
     * @var StateRepository
     */
    protected $stateRepository;

    public function __construct(StateRepository $stateRepository)
    {
        $this->stateRepository = $stateRepository;
    }

    public function all()
    {
        return $this->stateRepository->all();
    }



}
