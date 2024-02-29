<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\modules;


class Etudiant extends Model
{
    use HasFactory;
    public function modules(): BelongsToMany
    {
        return $this->belongsToMany(Module::class)->withPivot('note');
    }
}
