<?php
ob_start();
$jksdata = ob_get_clean();
$outpathstr = '/Users/jimseconde/Desktop/RUNTIME_DEBUG/DEBUG_' . date("Y-m-d_His") . ".txt";
$fp = fopen($outpathstr, "w");
fwrite($fp, $jksdata);
fclose($fp);
