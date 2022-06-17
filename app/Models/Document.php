<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
      'code_document',
      'type'
    ];

    public function collaborators()
    {
        return $this->belongsToMany(Collaborator::class, 'document_id');
    }

    public function machines()
    {
        return $this->belongsToMany(Machine::class, 'document_id');
    }

    public function peripherals()
    {
        return $this->belongsToMany(Peripheral::class, 'document_id');
    }
}
