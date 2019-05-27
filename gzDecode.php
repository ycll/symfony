<?php
require_once 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
// 创建日志频道
$log = new Logger('name');
$log->pushHandler(new StreamHandler('./monolog.log', Logger::WARNING));
// 添加日志记录
$log->addWarning('Foo');
$log->addError('Bar');
