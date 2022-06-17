<?php

namespace App\Repositories\Eloquent;

use App\Models\Document;
use App\Repositories\Contracts\DocumentRepositoryInterface;

class DocumentRepository implements DocumentRepositoryInterface
{
    private $document;

    public function __construct(Document $document)
    {
        $this->document = $document;
    }

    public function getAllDocuments()
    {
        return $this->document->all();
    }
}
