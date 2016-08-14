<?php
include ("dataStore.php");
echo "JIM SECONDE COMMAND LINE\nPROJECT JAMESLAND\nSTRATEGIC OUTPUT BEHAVIOUR\n";

$someData = [
  "Green" => "Daishan",
  "Green" => "Harian",
  "Fuscia" => "Banān",
  "Fuscia" => "El Aguilar",
  "Khaki" => "Kryva Hora",
  "Red" => "Ertai",
  "Orange" => "Tagawa",
  "Fuscia" => "Uozu",
  "Turquoise" => "Sendai-shi",
  "Mauv" => "Jajarkrajan",
  "Indigo" => "Qazax",
  "Crimson" => "Shimo-furano",
  "Puce" => "Robīt",
  "Crimson" => "Sa’erhusong",
  "Orange" => "Thanh Chương",
  "Violet" => "Xinzhuang",
  "Red" => "Luobei",
  "Indigo" => "Kowŏn-ŭp",
  "Green" => "Zombo",
  "Red" => "Porto Salvo",
  "Indigo" => "Mingshuihe",
  "Puce" => "Saint-Félicien",
  "Orange" => "Zaliztsi",
  "Goldenrod" => "Mutis",
  "Red" => "Genet",
  "Maroon" => "Kirkuk",
  "Violet" => "Kafr Baţnā",
  "Teal" => "Cestas",
  "Aquamarine" => "Cachoeira",
  "Violet" => "Nagqu",
  "Blue" => "Cerquilho"
];

$myObject = new dataStore;
$myObject->loadData($someData);
$myObject->setOutputBehaviour(new jsonOutput);
echo $myObject->output();
