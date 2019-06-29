<?php

require_once __DIR__ . "/../../vendor/autoload.php";

$command = new \OcrNumbers\CommandFrom(new \OcrNumbers\OcrNumbers());
$command->run();