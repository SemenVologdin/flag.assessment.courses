<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Educator extends Model
{
    use HasFactory;

    public function actions(): HasMany
    {
        return $this->hasMany(EducatorModuleAction::class);
    }
}
