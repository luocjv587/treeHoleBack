<?php

declare(strict_types=1);

namespace App\Process;

use App\Model\Second;
use Hyperf\Process\AbstractProcess;
use Hyperf\Process\Annotation\Process;

/**
 * @Process(name="ReduceSeconds")
 */
class ReduceSeconds extends AbstractProcess
{
    public function handle(): void
    {
//        if (is_null(Second::first())) {
//            $second = new Second();
//            $second->seconds = 12 * 60 * 60;
//            $second->save();
//        }
//        while (true) {
//            $second = Second::first();
//            $second->seconds -= 1;
//            $second->save();
//            sleep(1);
//        }
    }
}
