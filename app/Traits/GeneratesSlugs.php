<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait GeneratesSlugs
{
    public function generateSlug(array $fields = []) {
        return Str::slug(implode('-', $fields) . '-' . Str::random(6)); 
    }
}
