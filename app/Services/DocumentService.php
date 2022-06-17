<?php

namespace App\Services;
use App\Repositories\Contracts\DocumentRepositoryInterface;

class DocumentService
{
    private $document;

    public function __construct(DocumentRepositoryInterface $document)
    {
        $this->document = $document;
    }

    public function getDocumentRepository(): DocumentRepositoryInterface
    {
        return $this->document;
    }
}
