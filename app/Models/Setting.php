<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'key',
        'description',
        'value',
        'is_array',
    ];

    protected $casts = [
        'value' => 'object', // Cast value ke object
        'is_array' => 'boolean',
    ];

    // Generate UUID secara otomatis
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = (string) \Illuminate\Support\Str::uuid();
        });
    }
}