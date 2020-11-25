<?php

namespace App\Services;


use App\Repositories\Rank\RankRepository;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;


class RankService
{
    /**
     * @var RankRepository
     */
    protected $rankRepository;

    public function __construct(RankRepository $rankRepository)
    {
        $this->rankRepository = $rankRepository;
    }

    public function findBySecurityId(int $securityid)
    {
        Log::info("security id",[$securityid]);
        return $this->rankRepository->where(['security_id'=>$securityid])->get();
    }



}
