<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Registration extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_name',
        'student_phone',
        'student_email',
    ];

    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class);
    }
}
