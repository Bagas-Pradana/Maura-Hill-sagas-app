<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class ArrayObjectCast implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        $decoded = json_decode($value, true) ?? [];
        return $decoded;
    }

    public function set($model, string $key, $value, array $attributes)
    {
        if (is_array($value)) {
            return json_encode($value);
        }

        return $value;
    }
}
