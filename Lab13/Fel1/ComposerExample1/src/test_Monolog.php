<?php
require '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('path/to/your/log/file.log', Logger::WARNING));

// Add a log message
$log->warning('This is a warning message.');
