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
}
