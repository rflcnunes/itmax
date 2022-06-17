<?php

namespace App\Http\Controllers;

use App\Http\Requests\Machine\CreateMachineRequest;
use App\Services\MachineService;

class MachineController extends Controller
{
    private $machine;

    public function __construct(MachineService $machine)
    {
        $this->machine = $machine;
    }

    public function create(CreateMachineRequest $request)
    {
        $data = $request->all();

        return $this->machine->createMachine($data);
    }
    /**
     * Display a listing of the machines.
     */
    public function index()
    {
        return $this->machine->getMachineRepository()->getAllMachines();
    }
}
