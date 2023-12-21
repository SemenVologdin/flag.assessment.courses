<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EducatorModuleAction extends Model
{
    use HasFactory;

    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function educator(): BelongsTo
    {
        return $this->belongsTo(Educator::class);
    }
}
