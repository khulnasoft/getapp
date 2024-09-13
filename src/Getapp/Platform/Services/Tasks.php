<?php

namespace Getapp\Platform\Services;

use Getapp\Platform\Tasks\Doctor;
use Getapp\Platform\Tasks\Install;
use Getapp\Platform\Tasks\Maintenance;
use Getapp\Platform\Tasks\Migrate;
use Getapp\Platform\Tasks\QueueCount;
use Getapp\Platform\Tasks\QueueRetry;
use Getapp\Platform\Tasks\ScheduleFunctions;
use Getapp\Platform\Tasks\ScheduleMessages;
use Getapp\Platform\Tasks\SDKs;
use Getapp\Platform\Tasks\Specs;
use Getapp\Platform\Tasks\SSL;
use Getapp\Platform\Tasks\Upgrade;
use Getapp\Platform\Tasks\Vars;
use Getapp\Platform\Tasks\Version;
use Utopia\Platform\Service;

class Tasks extends Service
{
    public function __construct()
    {
        $this->type = Service::TYPE_TASK;
        $this
            ->addAction(Doctor::getName(), new Doctor())
            ->addAction(Install::getName(), new Install())
            ->addAction(Maintenance::getName(), new Maintenance())
            ->addAction(Migrate::getName(), new Migrate())
            ->addAction(QueueCount::getName(), new QueueCount())
            ->addAction(QueueRetry::getName(), new QueueRetry())
            ->addAction(SDKs::getName(), new SDKs())
            ->addAction(SSL::getName(), new SSL())
            ->addAction(ScheduleFunctions::getName(), new ScheduleFunctions())
            ->addAction(ScheduleMessages::getName(), new ScheduleMessages())
            ->addAction(Specs::getName(), new Specs())
            ->addAction(Upgrade::getName(), new Upgrade())
            ->addAction(Vars::getName(), new Vars())
            ->addAction(Version::getName(), new Version())
        ;
    }
}
