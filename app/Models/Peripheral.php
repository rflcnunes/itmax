<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Peripheral extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code_peripheral',
        'type',
        'model',
        'manufacturer',
        'quantity',
    ];

    public function collaborators()
    {
        return $this->belongsToMany(Collaborator::class, 'collaborator_machine_peripheral', 'peripheral_id');
    }
}
