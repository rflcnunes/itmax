<?php

namespace App\Http\Controllers;

use App\Http\Requests\Collaborator\BindCollaboratorMachineRequest;
use App\Http\Requests\Collaborator\CreateCollaboratorRequest;
use App\Services\CollaboratorService;

class CollaboratorController extends Controller
{
    private $collaborator;

    public function __construct(CollaboratorService $collaborator)
    {
        $this->collaborator = $collaborator;
    }

    public function create(CreateCollaboratorRequest $request)
    {
        $data = $request->all();

        return $this->collaborator->createCollaborator($data);
    }

    public function getCollaborators()
    {
        return $this->collaborator->getCollaboratorRepository()->getAllCollaborators();
    }

    public function getCollaborator($id)
    {
        return $this->collaborator->getCollaboratorRepository()->getCollaboratorById($id);
    }

    public function attachMachine(BindCollaboratorMachineRequest $request)
    {
        $data = $request->all();

        return $this->collaborator->attachMachine($data);
    }

    public function getMachines($id)
    {
        return $this->collaborator->getCollaboratorRepository()->getCollaboratorMachines($id);
    }
}
