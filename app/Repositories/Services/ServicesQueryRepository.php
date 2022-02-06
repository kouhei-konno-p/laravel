<?php

namespace App\Repositories\Services;
use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Collection;


class ServicesQueryRepository implements ServicesRepositoryInterface
{

    public function getAll(): Collection
    {
        return DB::table('services')
            ->join('categories', 'services.category_id', '=', 'categories.id')
            ->select('services.*', 'categories.name as category_name')
            ->get();
    }

}