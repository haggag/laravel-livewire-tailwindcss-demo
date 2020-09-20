<?php


namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class HttpBaseRepository
{
    protected $http;

    public function __construct(string $api_base_url, array $http_options)
    {
        $this->http =  Http::withOptions([
                'base_uri' => $api_base_url
            ])
            ->timeout($http_options['timeout'])
            ->retry($http_options['retry_times'], $http_options['retry_sleep']);
    }
}
