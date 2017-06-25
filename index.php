<?php

require 'vendor/autoload.php';

$string = 'Test String';

$calclen = \hcStringLength\String::hcStrLength($string);

echo "\n Length of : # $string # is : # $calclen # elements. \n";
