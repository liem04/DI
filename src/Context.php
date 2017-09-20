<?php

namespace DI;


/**
 * Class Context
 * @package DI
 */
class Context
{

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * Context constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     *
     */
    public function testDI()
    {
        $this->logger->log('test log');
    }
}