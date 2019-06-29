<?php

namespace OcrNumbers;

class OcrNumbers
{
    private $numbers = [
        1=><<<EOT
   
  |
  |
   
EOT,
        2=><<<EOT
 _ 
 _|
|_ 
   
EOT,
        3=><<<EOT
 _ 
 _|
 _|
   
EOT,
        4=><<<EOT
   
|_|
  |
   
EOT,
        5=><<<EOT
 _ 
|_ 
 _|
   
EOT,
        6=><<<EOT
 _ 
|_ 
|_|
   
EOT,
        7=><<<EOT
 _ 
  |
  |
   
EOT,
        8=><<<EOT
 _ 
|_|
|_|
   
EOT,
        9=><<<EOT
 _ 
|_|
 _|
   
EOT,
        0=><<<EOT
 _ 
| |
|_|
   
EOT
    ];

    private function _getNumber(int $number) : string
    {
        return $this->numbers[$number];
    }

    public function to(int $number) : string
    {
        $numberString = (string) $number;
        $numberParts = str_split($number, 1);
        $stringLength = strlen($numberString);
        $output = [0=>[],1=>[],2=>[],3=>[]];
        foreach($numberParts as $number ){
            foreach(explode(PHP_EOL, $this->_getNumber($number)) as $index=>$part) {
                $output[$index][] = $part;
            }
        }

        $outputString = "";
        foreach($output as $index=>$part) {
            $outputString .= implode("", $output[$index]) . PHP_EOL;
        }
        $outputString = rtrim($outputString,PHP_EOL);
        return $outputString;
    }

    public function from(string $number)
    {
        foreach($this->numbers as $index=>$numberLoop) {
            if($numberLoop == $number) {
                return $index;
            }
        }
    }
}
