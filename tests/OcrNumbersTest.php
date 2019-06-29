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

    public function test_three(): void
    {
        $ocrNumbers = new OcrNumbers();
        $result = $ocrNumbers->to(3);
        $three = <<<EOT
 _ 
 _|
 _|
   
EOT;
        $this->assertEquals($three,$result);
    }

    public function test_four(): void
    {
        $ocrNumbers = new OcrNumbers();
        $result = $ocrNumbers->to(4);
        $four = <<<EOT
   
|_|
  |
   
EOT;
        $this->assertEquals($four,$result);
    }

    public function test_five(): void
    {
        $ocrNumbers = new OcrNumbers();
        $result = $ocrNumbers->to(5);
        $five = <<<EOT
 _ 
|_ 
 _|
   
EOT;
        $this->assertEquals($five,$result);
    }

    public function test_six(): void
    {
        $ocrNumbers = new OcrNumbers();
        $result = $ocrNumbers->to(6);
        $six = <<<EOT
 _ 
|_ 
|_|
   
EOT;
        $this->assertEquals($six,$result);
    }

    public function test_seven(): void
    {
        $ocrNumbers = new OcrNumbers();
        $result = $ocrNumbers->to(7);
        $seven = <<<EOT
 _ 
  |
  |
   
EOT;
        $this->assertEquals($seven,$result);
    }

    public function test_eight(): void
    {
        $ocrNumbers = new OcrNumbers();
        $result = $ocrNumbers->to(8);
        $eight = <<<EOT
 _ 
|_|
|_|
   
EOT;
        $this->assertEquals($eight,$result);
    }

    public function test_nine(): void
    {
        $ocrNumbers = new OcrNumbers();
        $result = $ocrNumbers->to(9);
        $nine = <<<EOT
 _ 
|_|
 _|
   
EOT;
        $this->assertEquals($nine,$result);
    }

    public function test_zero(): void
    {
        $ocrNumbers = new OcrNumbers();
        $result = $ocrNumbers->to(0);
        $zero = <<<EOT
 _ 
| |
|_|
   
EOT;
        $this->assertEquals($zero,$result);
    }

    public function test_one_zero(): void
    {
        $ocrNumbers = new OcrNumbers();
        $result = $ocrNumbers->to(10);
        $compare = <<<EOT
    _ 
  || |
  ||_|
      
EOT;
        $this->assertEquals($compare,$result);
    }

    public function test_one_zero_two(): void
    {
        $ocrNumbers = new OcrNumbers();
        $result = $ocrNumbers->to(102);
        $compare = <<<EOT
    _  _ 
  || | _|
  ||_||_ 
         
EOT;

        $this->assertEquals($compare,$result);
    }

    public function test_from_one()
    {
        $ocrNumbers = new OcrNumbers();
        $one = <<<EOT
   
  |
  |
   
EOT;
        $result = $ocrNumbers->from($one);
        $this->assertEquals(1, $result);
    }
}
