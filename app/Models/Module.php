<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Module extends Model
{
    use HasFactory;

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function educator(): BelongsTo
    {
        return $this->belongsTo(Educator::class);
    }

    public function actions(): HasMany
    {
        return $this->hasMany(EducatorModuleAction::class);
    }
}
