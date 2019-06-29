<?php

namespace OcrNumbers;

class CommandTo extends BaseCommand
{
    public function run()
    {
        if(!isset($_SERVER['argv'][1])) {
            echo "Please enter a number" . PHP_EOL;
        }
        echo $this->ocrNumbers()->to($_SERVER['argv'][1]) . PHP_EOL;
    }
}
