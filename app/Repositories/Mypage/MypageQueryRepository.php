<?php

namespace App\Repositories\Mypage;
use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Collection;

class MypageQueryRepository implements MypageRepositoryInterface
{

    public function getUserInfo(int $id): Collection
    {
        return DB::table('users')
            ->leftJoin('user_profiles', 'user_profiles.user_id', '=', 'users.id')
            ->select('users.*')
            ->where('users.id', $id)
            ->get();
    }

    
}