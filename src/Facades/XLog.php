<?php

namespace PhpMonsters\Log\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class XLog
 * @package PhpMonsters\XLog
 * @author  Aboozar Ghaffari <aboozar.ghf@gmail.com>
 */
class XLog extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor ()
    {
        return 'PhpMonsters\Log\Logger';
    }
}