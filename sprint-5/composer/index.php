<?php

require_once __DIR__."/vendor/autoload.php";

use Src\ClassName;
use Carbon\Carbon;

$cek = new ClassName;
echo "\n";
printf("Right now in Vancouver is %s", Carbon::now('Asia/Jakarta')); 
echo "\n";
?>