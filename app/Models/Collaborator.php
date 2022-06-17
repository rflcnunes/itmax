<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collaborator extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'role',
        'name',
        'email',
        'cpf',
        'phone',
        'address'
    ];

    public function machines()
    {
        return $this->belongsToMany(Machine::class, 'collaborator_machine_peripheral', 'collaborator_id');
    }
}
