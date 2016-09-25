<?php

$app = \BFW\Application::getInstance();
$config = $module->getConfig();

echo 'Debug mode : '.($app->getConfig('debug') ? 'true' : 'false')."\n";
echo 'Module version : '.$config->getConfig('version')."\n";
echo 'Config hello : '.$config->getConfig('hello')."\n";
