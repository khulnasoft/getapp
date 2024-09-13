<?php

namespace Getapp\Utopia\Response\Model;

use Getapp\Utopia\Response;

class Preferences extends Any
{
    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return 'Preferences';
    }

    /**
     * Get Type
     *
     * @return string
     */
    public function getType(): string
    {
        return Response::MODEL_PREFERENCES;
    }
}
