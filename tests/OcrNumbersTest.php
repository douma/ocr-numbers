<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use OcrNumbers\OcrNumbers;

final class OcrNumbersTest extends TestCase
{
    public function test_one(): void
    {
        $ocrNumbers = new OcrNumbers();
        $result = $ocrNumbers->to(1);
        $one = <<<EOT
   
   |
   |
   
EOT;
        $this->assertEquals($one,$result);
    }

    public function test_two(): void
    {
        $ocrNumbers = new OcrNumbers();
        $result = $ocrNumbers->to(2);
        $two = <<<EOT
 _ 
 _|
|_ 

EOT;
        $this->assertEquals($two,$result);
    }
}
