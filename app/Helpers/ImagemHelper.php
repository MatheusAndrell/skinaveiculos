<?php

namespace App\Helpers;

use App\Enums\ImagemTipoEnum;
use App\Models\Imagem;

class ImagemHelper
{

    /**
     * Se não tiver imagem principal, retorna o nome de uma aleatória
     * 
     * @param $imagens
     * @return string
     * @todo passar isso pro model
     */
    public static function get($imagens)
    {
        return $imagens->filter(function (string $value) {
            return json_decode($value)->tipo == ImagemTipoEnum::principal;
        })?->first()?->url ?? $imagens->random()->url;
    }
}
