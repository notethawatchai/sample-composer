<?php

require __DIR__ . '/vender/autoload.php';

$hello = new \Hello\Hello();
echo $hello->sayAnything("Hello world");