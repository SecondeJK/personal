<?php

class dataStore
{
  public $heldData;
  private $outputBehaviour;

  public function __construct()
  {
    echo "Creating DataStorage Object...\n\n";
  }

  public function loadData($input)
  {
    $this->heldData = $input;
  }

  public function setOutputBehaviour(outputInterface $outputBehaviourInput)
  {
    $this->outputBehaviour = $outputBehaviourInput;
  }

  public function output()
  {
    return $this->outputBehaviour->outputFormat($this->heldData);
  }

  public function printContents()
  {
    print_r($this->heldData);
  }
}

interface outputInterface
{
  public function outputFormat($incoming);
}

class serializeOutput implements outputInterface
{
  public function outputFormat($incoming)
  {
    return serialize($incoming);
  }
}

class jsonOutput implements outputInterface
{
  public function outputFormat($incoming)
  {
    return json_encode($incoming);
  }
}
