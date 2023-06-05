<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;

trait Seed
{

    public function singleFieldSeed(array $data, string $campo, Model $model)
    {
        foreach ($data as $info) {
            $model->create([
                $campo => $info
            ]);
        }
    }
}
