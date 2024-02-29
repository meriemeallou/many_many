<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Etudiant;


class Module extends Model
{
    use HasFactory;
    public function etudiants(): BelongsToMany
    {
        return $this->belongsToMany(Etudiant::class)->withPivot('note');
    }
}
