<?php

$app    = \BFW\Application::getInstance();
$config = $this->getConfig();

echo 'Debug mode : '.($app->getConfig()->getValue('debug', 'global.php') ? 'true' : 'false')."\n";
echo 'Module version : '.$config->getValue('version')."\n";
echo 'Config hello : '.$config->getValue('hello')."\n";
