<?php

namespace App\Repositories;

use App\DTO\StatsData;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Spatie\DataTransferObject\DataTransferObjectError;

class StatsRepository extends HttpBaseRepository implements StatsRepositoryInterface
{
   public function __construct(string $api_base, array $http_options)
   {
       parent::__construct($api_base, $http_options);
   }

    public function stats(): StatsData
    {
        $statsDto = null;
        try {


            $response = $this->http->get(config('ark.endpoints.stats'));
            $statsDto = StatsData::fromPayload($response->throw()->json());
            $statsDto->touch(now()->toTimeString());
            // Cache last known stats
            Cache::forever('blockchain_stats', ['data' => $statsDto->toArray()]);
        }
        catch (RequestException $ex) {
            Log::error('Failed communicating with the blockchain endpoint', ['details' => $ex->getMessage()]);
        }
        catch (DataTransferObjectError $err) {
            Log::error('Blockchain endpoint returned invalid data', ["details" => $err->getMessage()]);
        }

        if (!$statsDto){
            $statsDto = $this->loadLastKnownStats();
        }
        return $statsDto;
//        if ($response->successful()) {
//            return StatsData::fromPayload($response->json());
//        } else {
//            // TODO log the failure cause
//            return StatsData::newObj();
//        }
    }

    private function loadLastKnownStats() {
       $statsDto = null;
       if (Cache::has('blockchain_stats')) {
            $cachedStats = Cache::get('blockchain_stats');
            $statsDto =  StatsData::fromPayload($cachedStats);
            Log::warning("returning cached stats");
       } else {
           $statsDto =  StatsData::newObj();
           Log::warning("returning empty stats");
       }

       return $statsDto;
    }
}
