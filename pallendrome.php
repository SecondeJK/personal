<?php

class pallendrome {

  var $input;
  var $caseSensitive;
  var $reversedString;

  public static function checkString($input, $caseSensitive)
  {
    $this->input = $input;
    $this->caseSensitive = $caseSensitive;
    $this->inputValidation();
  }

  private function inputValidation()
  {
    if (!is_string($input)) {
      throw new Exception('Error: You did not provide me with a string!')
    } elseif (!is_bool($caseSensitive)) {
      throw new Exception('Error: You did not provide me with a valid case switch!')
    }
  }

  private function reverseString()
  {
    if ($this->caseSensitive == false) {
      $this->reversedString = strrev(strtolower($this->input)
    } else {
      $this->reversedString = strrev($this->input)
    }
  }

}
//strrev
//is_string
