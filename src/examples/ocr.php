<?php

require_once __DIR__ . "/../../vendor/autoload.php";

$command = new \OcrNumbers\Command(new \OcrNumbers\OcrNumbers());
$command->run();