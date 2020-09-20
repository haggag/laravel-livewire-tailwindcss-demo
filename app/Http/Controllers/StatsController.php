<?php

namespace App\Http\Controllers;

use App\Repositories\StatsRepositoryInterface;
use Illuminate\Http\Request;


class StatsController extends Controller
{
    public function stats(StatsRepositoryInterface $statsRepository)
    {
        return $statsRepository->stats();
    }
}
