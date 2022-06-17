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
        return $this->belongsToMany(Machine::class, 'collaborator_id');
    }

    public function peripherals()
    {
        return $this->belongsToMany(Peripheral::class, 'collaborator_id');
    }

    public function documents()
    {
        return $this->belongsToMany(Document::class, 'collaborator_id');
    }

}
