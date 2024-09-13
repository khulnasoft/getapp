<?php

namespace Getapp\Utopia\Response\Model;

use Getapp\Utopia\Response;
use Getapp\Utopia\Response\Model;

class LocaleCode extends Model
{
    public function __construct()
    {
        $this
            ->addRule('code', [
                'type' => self::TYPE_STRING,
                'description' => 'Locale codes in [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes)',
                'default' => '',
                'example' => 'en-us',
            ])
            ->addRule('name', [
                'type' => self::TYPE_STRING,
                'description' => 'Locale name',
                'default' => '',
                'example' => 'US',
            ])
        ;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return 'LocaleCode';
    }

    /**
     * Get Type
     *
     * @return string
     */
    public function getType(): string
    {
        return Response::MODEL_LOCALE_CODE;
    }
}
