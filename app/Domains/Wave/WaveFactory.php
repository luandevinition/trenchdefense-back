<?php

namespace App\Domains\Wave;

use App\Domains\Base\ResourceID;
use App\Domains\Wave\Item\WaveItem;
use App\Domains\Wave\Item\WaveItemRepository;
use App\Domains\Wave\Zombie\WaveZombie;
use App\Domains\Wave\Zombie\WaveZombieFactory;
use App\Domains\Zombie\ZombieRepository;
use Illuminate\Support\Collection;

class WaveFactory
{
    /**
     * @var WaveZombieFactory
     */
    private $waveZombieFactory;


    /**
     * @var WaveItemRepository
     */
    private $waveItemRepository;


    /**
     * @param WaveZombieFactory $waveZombieFactory
     * @param WaveItemRepository $waveItemRepository
     */
    public function __construct(
        WaveZombieFactory $waveZombieFactory,
        WaveItemRepository $waveItemRepository
    )
    {
        $this->waveZombieFactory = $waveZombieFactory;
        $this->waveItemRepository = $waveItemRepository;
    }

    /**
     * @param Name $name
     * @param WaveID $waveID
     * @param ResourceID $resourceID
     * @param Collection | WaveItem[] $waveItems
     * @param Collection | WaveZombie[] $waveZombies
     * @return Wave
     */
    public function make(
        Name $name,
        WaveID $waveID,
        ResourceID $resourceID,
        Collection $waveItems,
        Collection $waveZombies = null
    )
    {
        return new Wave(
            $name,
            $waveID,
            $resourceID,
            $waveItems,
            $waveZombies
        );
    }

    /**
     * @param \App\Wave $eloquent
     * @return Wave
     */
    public function makeByEloquent(
        \App\Wave $eloquent
    )
    {

        $waveZombies = $eloquent->waveZombies->map(function (\App\WaveZombie $waveZombie) {
            return $this->waveZombieFactory->makeByEloquent($waveZombie);
        });

        $waveItems = $this->waveItemRepository->findByWaveID(new WaveID($eloquent->id));

        return $this->make(
            new Name($eloquent->name),
            new WaveID($eloquent->id),
            new ResourceID($eloquent->resource_id),
            $waveItems,
            $waveZombies
        );
    }

    /**
     * @param array $array
     * @param ZombieRepository $zombieRepository
     * @return Wave
     */
    public function makeByArray(
        array $array,
        ZombieRepository $zombieRepository
    )
    {
        $waveId = !empty($array['id']) ? new WaveID($array['id']) : new WaveID(null);
        $waveZombies = !empty($array['wave_zombie']['zombie_id']) ? $array['wave_zombie']['zombie_id'] : array();

        $waveZombiesCollect = collect();

        foreach ($waveZombies as $index => $zombieID) {
            $quantity = !empty($array['wave_zombie']['quantity'][$index]) ? $array['wave_zombie']['quantity'][$index] : 0;
            $waveZombieInfo = $this->waveZombieFactory->makeByArray(
                array(
                    'wave_id' => $waveId,
                    'zombie_id' => $zombieID,
                    'quantity' => $quantity
                ),
                $zombieRepository
            );

            $waveZombiesCollect->push($waveZombieInfo);
        }

        return $this->make(
            new Name($array['name']),
            $waveId,
            new ResourceID($array['resource_id']),
            $waveZombiesCollect,
            collect([])
        );
    }
}