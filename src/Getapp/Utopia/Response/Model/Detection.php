<?php

namespace Getapp\Utopia\Response\Model;

use Getapp\Utopia\Response;
use Getapp\Utopia\Response\Model;

class Detection extends Model
{
    public function __construct()
    {
        $this
            ->addRule('runtime', [
                'type' => self::TYPE_STRING,
                'description' => 'Runtime',
                'default' => '',
                'example' => 'node',
            ]);
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return 'Detection';
    }

    /**
     * Get Type
     *
     * @return string
     */
    public function getType(): string
    {
        return Response::MODEL_DETECTION;
    }
}
