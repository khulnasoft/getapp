<?php

namespace Getapp\GraphQL;

use Getapp\GraphQL\Types\Assoc;
use Getapp\GraphQL\Types\InputFile;
use Getapp\GraphQL\Types\Json;
use Getapp\GraphQL\Types\Registry;
use GraphQL\Type\Definition\Type;

class Types
{
    /**
     * Get the JSON type.
     *
     * @return Json
     */
    public static function json(): Type
    {
        if (Registry::has(Json::class)) {
            return Registry::get(Json::class);
        }
        $type = new Json();
        Registry::set(Json::class, $type);
        return $type;
    }

    /**
     * Get the JSON type.
     *
     * @return Json
     */
    public static function assoc(): Type
    {
        if (Registry::has(Assoc::class)) {
            return Registry::get(Assoc::class);
        }
        $type = new Assoc();
        Registry::set(Assoc::class, $type);
        return $type;
    }

    /**
     * Get the InputFile type.
     *
     * @return InputFile
     */
    public static function inputFile(): Type
    {
        if (Registry::has(InputFile::class)) {
            return Registry::get(InputFile::class);
        }
        $type = new InputFile();
        Registry::set(InputFile::class, $type);
        return $type;
    }
}
