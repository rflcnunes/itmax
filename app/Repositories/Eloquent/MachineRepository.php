<?php

namespace App\Repositories\Eloquent;

use App\Models\Machine;
use App\Repositories\Contracts\MachineRepositoryInterface;

class MachineRepository implements MachineRepositoryInterface
{
    private $machine;

    public function __construct(Machine $machine)
    {
        $this->machine = $machine;
    }

    public function getAllMachines()
    {
        return $this->machine->all();
    }
}
