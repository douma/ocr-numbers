<?php

require_once __DIR__ . "/../../vendor/autoload.php";

$command = new \OcrNumbers\CommandTo(new \OcrNumbers\OcrNumbers());
$command->run();