<?php

use Yaf\Application as Application;

define('APP_PATH', realpath(dirname(__FILE__) . '/../'));

$application = new Application( APP_PATH . "/conf/application.ini");

$application->bootstrap()->run();