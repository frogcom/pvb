<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'text',
        'available_spots',
        'total_spots',
    ];

    public function category(): BelongsTo
    {
        return $this->BelongsTo(Category::class);
    }

    public function registrations(): HasMany
    {
        return $this->HasMany(Registration::class);
    }


}
