<?php

namespace App\Repositories\Eloquent;

use App\Models\Peripheral;
use App\Repositories\Contracts\PeripheralRepositoryInterface;

class PeripheralRepository implements PeripheralRepositoryInterface
{
    private $peripheral;

    public function __construct(Peripheral $peripheral)
    {
        $this->peripheral = $peripheral;
    }

    public function getAllPeripherals()
    {
        return $this->peripheral->all();
    }
}
