<?php

namespace OcrNumbers;

class CommandFrom extends BaseCommand
{
    public function run()
    {
        if(!isset($_SERVER['argv'][1])) {
            echo "Please enter a number" . PHP_EOL;
        }
        if(!file_exists($_SERVER['argv'][1])) {
            echo "Please enter a valid file" . PHP_EOL;
        }

        echo $this->ocrNumbers()->from(file_get_contents($_SERVER['argv'][1])) . PHP_EOL;
    }
}
