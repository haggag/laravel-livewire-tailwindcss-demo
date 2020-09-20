<?php


namespace App\Repositories;


use Illuminate\Support\Collection;

class BlockRepository implements BlockRepositoryInterface
{

    public function getById(string $id)
    {
        return ['obj'];
    }

    public function get(int $page = 1, int $limit = 5): Collection
    {
        collect([1,2,3]);
    }
}
