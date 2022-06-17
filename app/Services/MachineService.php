<?php

namespace App\Services;

use App\Repositories\Contracts\MachineRepositoryInterface;

class MachineService
{
    private $machine;

    public function __construct(MachineRepositoryInterface $machine)
    {
        $this->machine = $machine;
    }

    public function getMachineRepository(): MachineRepositoryInterface
    {
        return $this->machine;
    }

    public function createMachine(array $data)
    {
        return $this->machine->createMachine($data);
    }
}
