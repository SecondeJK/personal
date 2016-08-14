<?php

class rateFinder
{
  private $curFrom;
  private $curTo;
  private $curRate;

  public function __construct($inFrom, $inTo)
  {
    $this->curFrom = $inFrom;
    $this->curTo = $inTo;
    $this->makeIndex();
  }

  public function showFrom()
  {
    echo $this->curFrom . "\n";
  }

  public function showTo()
  {
    echo $this->curTo . "\n";
  }

  public function makeIndex()
  {
    $this->curRate = $this->convert($this->curFrom, $this->curTo, 1);
  }

  public function getIndex()
  {
    echo $this->curRate . "\n";
  }

  function convert($from, $to, $retry = 0)
  {
      $ch = curl_init("http://download.finance.yahoo.com/d/quotes.csv?s=$from$to=X&f=l1&e=.csv");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HEADER, false);
      curl_setopt($ch, CURLOPT_NOBODY, false);
      $rate = curl_exec($ch);
      curl_close($ch);
        if ($rate) {
          return (float)$rate;
          } elseif ($retry > 0) {
        return convert($from, $to, --$retry);
        }
      return false;
  }
}
