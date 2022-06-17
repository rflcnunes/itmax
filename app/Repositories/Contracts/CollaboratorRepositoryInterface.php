<?php

namespace App\Repositories\Contracts;

interface CollaboratorRepositoryInterface
{
    public function createCollaborator(array $data);
    public function getAllCollaborators();
    public function getCollaboratorById($id);
}
