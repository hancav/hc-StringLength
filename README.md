# hc-StringLength

This is my simple wrapper for php function 'strlen' in form of a composer package.

This is a simple example class to test and train technologies:
composer / packages / packagist / github / sourcetree  

A package example usage file is included as: 'index.php'.

To use:
Add 1:
  require 'vendor/autoload.php';

Add 2:
  $calclen = \hcStringLength\String::hcStrLength($string);

  where:
  - $string is the string under test.
  - $calclen is the value of strlen for $string

To test:
Run 1:
  - php index.php (command line)

Or run 2:
  - php -S localhost:7000 (web browser)
