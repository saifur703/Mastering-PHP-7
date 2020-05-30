<?php

// unix epoch 
// unix timestamp
date_default_timezone_set("Asia/Dhaka");
// 28-05-20
echo date("d-m-y");
echo PHP_EOL;

// 28 May 2020
echo date("d M Y");
echo PHP_EOL;

// 28th May 2020
echo date("dS M Y");
echo PHP_EOL;

// Full Name of the Month
echo date("F");
echo PHP_EOL;

// Hour:Minute:Second -> GMT Timezone
echo date("h:m:s A");
echo PHP_EOL;

// Day of the year
echo date("z");
echo PHP_EOL;

echo time() . "\n";
echo strtotime("now");
echo PHP_EOL;
echo strtotime("28 May 2020") . "\n";
echo date("dS M Y", strtotime("28 May 2020"));
echo PHP_EOL;
echo strtotime("+3days") . "\n";
echo date("d m y", strtotime("+3days"));