<?php

namespace Getapp\Platform\Modules;

use Getapp\Platform\Services\Tasks;
use Getapp\Platform\Services\Workers;
use Utopia\Platform\Module;

class Core extends Module
{
    public function __construct()
    {
        $this->addService('tasks', new Tasks());
        $this->addService('workers', new Workers());
    }

}
