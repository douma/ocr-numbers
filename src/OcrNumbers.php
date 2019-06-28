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
        return $this->_getNumber($number);
    }
}
