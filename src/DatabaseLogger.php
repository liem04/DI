<?php

namespace DI;


/**
 * Class DatabaseLogger
 * @package DI
 */
class DatabaseLogger implements LoggerInterface
{

    /**
     * @param string $message
     */
    public function log(string $message)
    {
        echo 'Logged to database: ' . $message;
    }
}