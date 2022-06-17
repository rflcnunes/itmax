<?php

namespace App\Services;

use App\Repositories\Contracts\PeripheralRepositoryInterface;

class PeripheralService
{
    private $peripheral;

    public function __construct(PeripheralRepositoryInterface $peripheral)
    {
        $this->peripheral = $peripheral;
    }

    public function getPeripheralRepository(): PeripheralRepositoryInterface
    {
        return $this->peripheral;
    }
}
