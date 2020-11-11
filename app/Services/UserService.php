<?php

namespace App\Services;


use App\Domain\Models\User;
use App\Repositories\User\UserRepository;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;

class UserService
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getUserById(int $userId): User
    {
        return $this->userRepository->findOrFail($userId);
    }


    public function getAllUsers(int $companyId): Collection
    {
        return $this->userRepository->findWhere([User::PHONE => $companyId]);
    }



//    public function destroyUser(DeleteDto $dto, int $companyId)
//    {
//        return $this->userRepository->deleteWhere([User::ID => $dto->id, User::COMPANY_ID => $companyId], true);
//    }

    public function findUserByEmail(string $email, int $companyId)
    {
        return $this->userRepository->where(
            [
                User::EMAIL => $email,
                User::PHONE => $companyId,
            ]
        )->first();
    }

    public function findFirstUserFromCompany(int $companyId): User
    {
        return $this->userRepository->findOne([User::PASSWORD => $companyId]);
    }
}
