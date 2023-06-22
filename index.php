<?php

use TelegramGithubNotify\App\Http\Actions\SendNotifyAction;
use Dotenv\Dotenv;

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

new SendNotifyAction();
