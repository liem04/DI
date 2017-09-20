<?php

namespace DI;


/**
 * Interface LoggerInterface
 * @package DI
 */
interface LoggerInterface
{

    /**
     * @param string $message
     */
    public function log(string $message);
}