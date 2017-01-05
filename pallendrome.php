<?php

class pallendrome {

  public static function checkString($input, $caseSensitive = false)
  {
    self::inputValidation($input, $caseSensitive);
    $input = self::caseTransformer($input, $caseSensitive);
    $reversed = self::reverseString($input, $caseSensitive);

    if ($input === $reversed) {
      return true;
    } else {
      return false;
    }
  }

  private static function inputValidation($input, $caseSensitive)
  {
    if (!is_string($input)) {
      throw new Exception('Error: You did not provide me with a string!');
    } elseif (!is_bool($caseSensitive)) {
      throw new Exception('Error: You did not provide me with a valid case switch!');
    }
  }

  private static function reverseString($input, $caseSensitive)
  {
      return strrev($input);
  }

  private static function caseTransformer($input, $caseSensitive)
  {
    if ($caseSensitive == false) {
      return strtolower($input);
    } else {
      return $input;
    }
  }
}
