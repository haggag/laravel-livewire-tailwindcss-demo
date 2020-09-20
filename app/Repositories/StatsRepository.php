<?php

namespace App\Repositories;

use App\DTO\StatsData;

class StatsRepository extends HttpBaseRepository implements StatsRepositoryInterface
{
   public function __construct(string $api_base, array $http_options)
   {
       parent::__construct($api_base, $http_options);
   }

    public function stats(): StatsData
    {
        $response = $this->http->get(config('ark.endpoints.stats'))->json();
        return StatsData::fromPayload($response);
    }
}
