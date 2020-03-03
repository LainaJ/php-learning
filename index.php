<?php

$greeting = "Hey there, ";

$name = "Laina";

//one way to interpolate 
echo "Hello, $name";

//use period space to concatenate
echo 'Hey! I am using a period to concatenate, ' . $name;

//above, regular interpolation uses just $
// alternatively, can use or {$}
echo "How are you doing with these interpolation things, {$name}?";


