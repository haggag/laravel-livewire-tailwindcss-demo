<?php

namespace App\Http\Livewire;

use App\Repositories\StatsRepositoryInterface;
use Livewire\Component;

class BlockchainStats extends Component
{
    public string $timestamp = '';
    public string $supply = '';
    public int $height = 0;
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

    private function updateData()
    {
        $statsRepo = resolve(StatsRepositoryInterface::class);
        $stats = $statsRepo->stats();
        $this->height = $stats->block->height;
        $this->supply = str_replace('00000004', '',$stats->supply);
        $this->timestamp = now()->toTimeString();
    }
}
