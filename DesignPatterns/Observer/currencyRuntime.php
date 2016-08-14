<?php

include('currencyCheck.php');
$curObject = new rateFinder('EUR', 'USD');

$curObject->showFrom();
$curObject->showTo();

$curObject->getIndex();
