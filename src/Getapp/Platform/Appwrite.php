<?php

namespace Getapp\Platform;

use Getapp\Platform\Modules\Core;
use Utopia\Platform\Platform;

class Appwrite extends Platform
{
    public function __construct()
    {
        parent::__construct(new Core());
    }
}
