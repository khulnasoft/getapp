<?php

namespace Getapp\Utopia\Response\Model;

use Getapp\Utopia\Response;

class TemplateSMS extends Template
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return 'SmsTemplate';
    }

    /**
     * Get Type
     *
     * @return string
     */
    public function getType(): string
    {
        return Response::MODEL_SMS_TEMPLATE;
    }
}
