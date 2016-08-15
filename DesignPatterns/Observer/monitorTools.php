<?php

abstract class abstractRateObserver
{
  abstract function update(rateSubject $rateIn);
}

abstract class abstractRateSubject
{
  abstract function attach(abstractRateObserver $observerIn);
  abstract function detach(abstractRateObserver $observerIn);
  abstract function notify();
}
