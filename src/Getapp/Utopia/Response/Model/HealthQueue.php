<?php

namespace Getapp\Utopia\Response\Model;

use Getapp\Utopia\Response;
use Getapp\Utopia\Response\Model;

class HealthQueue extends Model
{
    public function __construct()
    {
        $this
            ->addRule('size', [
                'type' => self::TYPE_INTEGER,
                'description' => 'Amount of actions in the queue.',
                'default' => 0,
                'example' => 8,
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
        return 'Health Queue';
    }

    /**
     * Get Type
     *
     * @return string
     */
    public function getType(): string
    {
        return Response::MODEL_HEALTH_QUEUE;
    }
}
