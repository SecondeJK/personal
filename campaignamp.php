<?php

Print "CampaignAmp: Quick test from Alex\n";
Print "For the following function, please give me an input:";
$input = fgets(STDIN);

//santatise input

$conv_input = intval($input);

//convert fail or 0 isn't good
if ($conv_input == 0)
{
  Echo "Error: Input must be a number or not 0!";
  Exit;
}

var_dump($conv_input);

//no floats please

if (is_float($conv_input)) {
    echo "is float\n";
} else {
    echo "is not float\n";
}

function theTest(){

}
 ?>
