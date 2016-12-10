<?php

echo "Regex Testing: Reformat Names</br>";

$inputs = [
  'Jim Seconde',
  'J Seconde',
  'J K Seconde',
  'Mr Jim Seconde',
  'Mr. Jim Seconde'
]

$pattern = "/^(Mr|Mrs|Dr|Ms|Miss|Prof|Rev)?\.?\b(.+)\b(.+)$/";

$i = 1;

foreach ($inputs as $string) {
  preg_match($pattern, $string, $matches);
  $trimmedResult = array_map('trim', $matches);

  echo "Case Number: " . $i;
  $i++
}
