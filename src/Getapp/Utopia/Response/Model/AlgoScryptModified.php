<?php

namespace Getapp\Utopia\Response\Model;

use Getapp\Utopia\Response;
use Getapp\Utopia\Response\Model;

class AlgoScryptModified extends Model
{
    public function __construct()
    {
        $this
            ->addRule('type', [
                'type' => self::TYPE_STRING,
                'description' => 'Algo type.',
                'default' => 'scryptMod',
                'example' => 'scryptMod',
            ])
            ->addRule('salt', [
                'type' => self::TYPE_STRING,
                'description' => 'Salt used to compute hash.',
                'default' => '',
                'example' => 'UxLMreBr6tYyjQ==',
            ])
            ->addRule('saltSeparator', [
                'type' => self::TYPE_STRING,
                'description' => 'Separator used to compute hash.',
                'default' => '',
                'example' => 'Bw==',
            ])
            ->addRule('signerKey', [
                'type' => self::TYPE_STRING,
                'description' => 'Key used to compute hash.',
                'default' => '',
                'example' => 'XyEKE9RcTDeLEsL/RjwPDBv/RqDl8fb3gpYEOQaPihbxf1ZAtSOHCjuAAa7Q3oHpCYhXSN9tizHgVOwn6krflQ==',
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
        return 'AlgoScryptModified';
    }

    /**
     * Get Type
     *
     * @return string
     */
    public function getType(): string
    {
        return Response::MODEL_ALGO_SCRYPT_MODIFIED;
    }
}
