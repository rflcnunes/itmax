<?php

namespace App\Repositories\Contracts;

interface MachineRepositoryInterface
{
    public function createMachine(array $data);
    public function getAllMachines();
}
