<?php

require 'vendor/autoload.php';

$string = 'Test String';

$calclen = \hcStringLength\String::hcStrLength($string);

// Class call result
echo "\n Length of : # $string # is : # $calclen # elements. \n";

$showstr = showString($string);

// External function call result
echo "\n  $showstr \n";
