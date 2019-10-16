<?php

require_once '../vendor/autoload.php';

use src\Wcs\Hello;
use HelloWorld\SayHello;

echo App\Wcs\Hello::talk();
echo SayHello::world();