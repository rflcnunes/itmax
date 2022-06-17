<?php

namespace App\Services;

use App\Repositories\Contracts\CollaboratorRepositoryInterface;

class CollaboratorService
{
    private $collaborator;

    public function __construct(CollaboratorRepositoryInterface $collaborator)
    {
        $this->collaborator = $collaborator;
    }

    public function getCollaboratorRepository(): CollaboratorRepositoryInterface
    {
        return $this->collaborator;
    }

    public function createCollaborator(array $data)
    {
        return $this->collaborator->createCollaborator($data);
    }

    public function attachMachine(array $data)
    {
        return $this->collaborator->attachMachine($data);
    }

    public function attachPeripheral(array $data)
    {
        return $this->collaborator->attachPeripheral($data);
    }
}
