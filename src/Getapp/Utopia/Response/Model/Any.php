<?php

namespace Getapp\Utopia\Response\Model;

use Getapp\Utopia\Response;
use Getapp\Utopia\Response\Model;

class Any extends Model
{
    /**
     * @var bool
     */
    protected bool $any = true;

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return 'Any';
    }

    /**
     * Get Type
     *
     * @return string
     */
    public function getType(): string
    {
        return Response::MODEL_ANY;
    }
}
