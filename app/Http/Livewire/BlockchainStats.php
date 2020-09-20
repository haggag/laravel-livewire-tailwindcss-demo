<?php

namespace App\Http\Livewire;

use App\DTO\StatsData;
use App\Repositories\StatsRepositoryInterface;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Client\RequestException;
use Spatie\DataTransferObject\DataTransferObjectError;

class BlockchainStats extends Component
{
    private string $updated_at = '';
//    public string $supply = '';
//    public int $height = 0;
    private StatsData $data;
    private StatsRepositoryInterface $statsRepository;
//
//    public function __construct(StatsRepositoryInterface $statsRepository)
//    {
//        $this->statsRepository = $statsRepository;
//    }


    public function mount()
    {
        $this->updateData();
    }

    public function hydrate()
    {
        $this->updateData();
    }

    public function render()
    {
        return view('livewire.blockchain-stats');
    }

    // Computed Property
    public function getHeightProperty()
    {
        return  $this->data->empty() ? '-' : number_format ( $this->data->block->height, 0);
    }

    public function getSupplyProperty()
    {
        // TODO understand why that suffix is truncated!
        $truncated = str_replace('00000004', '', $this->data->supply);
        return $this->data->empty() ? '-' : number_format($truncated, 0);
    }

    public function getEnvironmentProperty()
    {
        return api_prod() ? 'Mainnet' : 'Devnet';
    }

    public function getTimestampProperty()
    {
        return  $this->data->empty() ? '-' : $this->data->timestamp;
    }

    private function updateData()
    {
        $this->data = resolve(StatsRepositoryInterface::class)->stats();
    }
}
