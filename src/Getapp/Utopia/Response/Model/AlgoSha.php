<?php

namespace Getapp\Utopia\Response\Model;

use Getapp\Utopia\Response;
use Getapp\Utopia\Response\Model;

class AlgoSha extends Model
{
    public function __construct()
    {
        // No options, because this can only be imported, and verifying doesnt require any configuration

        $this
            ->addRule('type', [
                'type' => self::TYPE_STRING,
                'description' => 'Algo type.',
                'default' => 'sha',
                'example' => 'sha',
            ]);
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return 'AlgoSHA';
    }

    /**
     * Get Type
     *
     * @return string
     */
    public function getType(): string
    {
        return Response::MODEL_ALGO_SHA;
    }
}
