<?php

namespace OcrNumbers;

class OcrNumbers
{
    public function to(int $number) : string
    {
        if($number === 1) {
            return <<<EOT
   
   |
   |
   
EOT;
        } elseif($number === 2) {
            return <<<EOT
 _ 
 _|
|_ 

EOT;
        }
    }
}
