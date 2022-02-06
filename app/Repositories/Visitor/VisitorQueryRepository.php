<?php

namespace App\Repositories\Visitor;
use Illuminate\Support\Facades\DB;

class VisitorQueryRepository implements VisitorRepositoryInterface
{
    public function getAll()
    {
        return DB::table('visitors')->get();
    }
}