<?php

namespace Getapp\Platform\Services;

use Getapp\Platform\Workers\Audits;
use Getapp\Platform\Workers\Builds;
use Getapp\Platform\Workers\Certificates;
use Getapp\Platform\Workers\Databases;
use Getapp\Platform\Workers\Deletes;
use Getapp\Platform\Workers\Functions;
use Getapp\Platform\Workers\Mails;
use Getapp\Platform\Workers\Messaging;
use Getapp\Platform\Workers\Migrations;
use Getapp\Platform\Workers\Usage;
use Getapp\Platform\Workers\UsageDump;
use Getapp\Platform\Workers\Webhooks;
use Utopia\Platform\Service;

class Workers extends Service
{
    public function __construct()
    {
        $this->type = Service::TYPE_WORKER;
        $this
            ->addAction(Audits::getName(), new Audits())
            ->addAction(Builds::getName(), new Builds())
            ->addAction(Certificates::getName(), new Certificates())
            ->addAction(Databases::getName(), new Databases())
            ->addAction(Deletes::getName(), new Deletes())
            ->addAction(Functions::getName(), new Functions())
            ->addAction(Mails::getName(), new Mails())
            ->addAction(Messaging::getName(), new Messaging())
            ->addAction(Webhooks::getName(), new Webhooks())
            ->addAction(UsageDump::getName(), new UsageDump())
            ->addAction(Usage::getName(), new Usage())
            ->addAction(Migrations::getName(), new Migrations())

        ;
    }
}
