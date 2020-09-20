<?php


namespace App\Repositories;


use App\DTO\StatsData;

interface StatsRepositoryInterface
{
    public function stats(): StatsData;
}
