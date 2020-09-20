<?php


namespace App\Repositories;

use Illuminate\Support\Collection;

interface BlockRepositoryInterface
{
    public function getById(string $id);
    public function get(int $page=1, int $limit=5): Collection;
    public function transactions(int $page=1, int $limit=5): Collection;
}
