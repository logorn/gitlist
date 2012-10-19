<?php

ini_set('display_errors', 1);
error_reporting(-1);

require_once __DIR__.'/../vendor/autoload.php';

$app = new GitList\Application(__DIR__.'/../config/dev.php');
$app->run();
