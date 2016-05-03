<?php

function solution($input){

//santize input
//regex
$regex_pat = "#^[0-9]*$#i";
$preg = preg_match($regex_pat, $input);

if ($preg == 0){
  print "ERROR: Numbers only (and no floating points!), please" . PHP_EOL;
  exit;
}

//convert me to an integer
$intinput = intval($input);

//integer can't be over 1000
if ($intinput > 1000){
  print "ERROR: Input can't be over 1000" . PHP_EOL;
  Exit;
}

//loop start
$i = 1;

//start loop
while($i <= $intinput)
{
  //outputstring to build text result (if there is one)
  $outputstring = "";
  if ($i %3 == 0){$outputstring = "Fizz";}
  if ($i %5 == 0){$outputstring = $outputstring . "Buzz";}
  if ($i %7 == 0){$outputstring = $outputstring . "Woof";}
  //print either outputstring or integer
  if ($outputstring == ""){
    echo $i . PHP_EOL;
  } else {
    echo $outputstring . PHP_EOL;
  }
  //logic loop ending
  $i++;
}
Print PHP_EOL . "COMPLETED" . PHP_EOL;
}

//Start running code from here:
print "Give me an input:" . PHP_EOL; //Used PHP_EOL as Mac coded
$datain = fgets(STDIN);
solution($datain);
?>
