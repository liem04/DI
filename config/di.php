<?php

return [
    \DI\LoggerInterface::class => \DI\get(\DI\DatabaseLogger::class)
];