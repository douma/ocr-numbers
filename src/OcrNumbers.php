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

    private function _getNumber(string $number) : string
    {
        return $this->numbers[$number];
    }

    public function to(string $number) : string
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

    private function _splitInput(string $input) : array
    {
        $inputParts = explode(PHP_EOL, $input);
        foreach($inputParts as $index=>$part) {
            $inputParts[$index] = str_split($part, 1);
        }
        return $inputParts;
    }

    private function _removeFirstChar(array $splitInput) : array
    {
        for($x=0;$x<3;$x++) {
            unset($splitInput[0][$x]);
            unset($splitInput[1][$x]);
            unset($splitInput[2][$x]);
            unset($splitInput[3][$x]);
        }
        $splitInput[0] = array_values($splitInput[0]);
        $splitInput[1] = array_values($splitInput[1]);
        $splitInput[2] = array_values($splitInput[2]);
        $splitInput[3] = array_values($splitInput[3]);
        return $splitInput;
    }

    private function _matchFirstNumber(int $numberLoopIndex, string $numberLoop, array $splitInput) : bool
    {
        $numberLoopSplit = $this->_splitInput($numberLoop);

        try {
            $inputMatch = [
                [$splitInput[0][0], $splitInput[0][1], $splitInput[0][2]],
                [$splitInput[1][0], $splitInput[1][1], $splitInput[1][2]],
                [$splitInput[2][0], $splitInput[2][1], $splitInput[2][2]],
                [$splitInput[3][0], $splitInput[3][1], $splitInput[3][2]],
            ];
        } catch(\Exception $e) {
            return false;
        }
        return $inputMatch == $numberLoopSplit;
    }

    public function from(string $number)
    {
        $splitInput = $this->_splitInput($number);
        $output = "";
        $numberLength = count($splitInput[0]) / 3;

        for($x=0;$x<$numberLength;$x++) {
            foreach($this->numbers as $index=>$numberLoop) {
                if($this->_matchFirstNumber($index, $numberLoop, $splitInput)) {
                    $output .= $index;
                    break;
                }
            }
            $splitInput = $this->_removeFirstChar($splitInput);
        }
        return $output;
    }
}
