<?php

namespace OcrNumbers;

abstract class BaseCommand
{
    private $ocrNumbers;

    public function __construct(OcrNumbers $ocrNumbers)
    {
        $this->ocrNumbers = $ocrNumbers;
    }

    protected function ocrNumbers() : OcrNumbers
    {
        return $this->ocrNumbers;
    }

    abstract public function run();
}
