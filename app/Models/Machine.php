<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Machine extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code_machine',
        'type',
        'model',
        'manufacturer',
        'quantity',
    ];

    public function collaborators()
    {
        return $this->belongsToMany(Collaborator::class, 'machine_id');
    }

    public function documents()
    {
        return $this->belongsToMany(Document::class, 'machine_id');
    }
}
