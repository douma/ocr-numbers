<?php

namespace OcrNumbers;

class Command
{
    private $ocrNumbers;

    public function __construct(OcrNumbers $ocrNumbers)
    {
        $this->ocrNumbers = $ocrNumbers;
    }

    public function run()
    {
        if(!isset($_SERVER['argv'][1])) {
            echo "Please enter a number" . PHP_EOL;
        }
        echo $this->ocrNumbers->to($_SERVER['argv'][1]) . PHP_EOL;
    }
}
