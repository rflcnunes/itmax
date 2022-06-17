<?php

namespace App\Repositories\Eloquent;

use App\Models\Collaborator;
use App\Repositories\Contracts\CollaboratorRepositoryInterface;

class CollaboratorRepository implements CollaboratorRepositoryInterface
{
    private $collaborator;

    public function __construct(Collaborator $collaborator)
    {
        $this->collaborator = $collaborator;
    }

    public function createCollaborator(array $data)
    {
        return $this->collaborator->create($data);
    }

    public function getAllCollaborators()
    {
        return $this->collaborator->all();
    }

    public function getCollaboratorById($id)
    {
        return $this->collaborator->find($id);
    }

    public function attachMachine(array $data)
    {

        $collaborator_id = $data['collaborator_id'];
        $machine_id = $data['machine_id'];

        return $this->collaborator->find($collaborator_id)->machines()->attach($machine_id);
    }

    public function getCollaboratorMachines($id)
    {
        return $this->collaborator->find($id)->machines;
    }

    public function attachPeripheral(array $data)
    {
        $collaborator_id = $data['collaborator_id'];
        $peripheral_id = $data['peripheral_id'];

        return $this->collaborator->find($collaborator_id)->peripherals()->attach($peripheral_id);
    }
}
