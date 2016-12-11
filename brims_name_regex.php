<?php

echo "Regex Testing: Reformat Names" . PHP_EOL;

$inputs = [
  'Jim Seconde',
  'J Seconde',
  'J K Seconde',
  'Mr Jim Seconde',
  'Mr. Jim Seconde'
];

$pattern = "^(Mr|Mrs|Dr|Ms|Miss|Prof|Rev)?(\.)?\s*(\S+)\s+(\S+)$@";

$i = 1;

foreach ($inputs as $string) {
  preg_match($pattern, $string, $matches);
  $trimmedResult = array_map('trim', $matches);

  echo "Case Number: " . $i . PHP_EOL;
  echo "Input String: " . $string . PHP_EOL;
  echo "Dump Match Array" . PHP_EOL;
  var_dump($trimmedResult);
  $i++;
}
