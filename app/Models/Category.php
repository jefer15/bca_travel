<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public function sites(): HasMany
    {
        return $this->hasMany(Site::class);
    }

    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(Subcategories::class);
    }
}
