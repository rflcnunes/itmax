<?php

namespace App\Repositories\Contracts;

interface CollaboratorRepositoryInterface
{
    public function createCollaborator(array $data);
    public function attachMachine(array $data);
    public function attachPeripheral(array $data);
    public function getAllCollaborators();
    public function getCollaboratorById($id);
    public function getCollaboratorMachines($id);
}
