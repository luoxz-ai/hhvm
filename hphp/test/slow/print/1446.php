<?php


// disable array -> "Array" conversion notice
<<__EntryPoint>>
function main_1446() {
error_reporting(error_reporting() & ~E_NOTICE);

print_r(array("\0" => 1));
print_r(array("\0" => "\0"));
print_r(array("\0" => "\\"));
print_r(array("\0" => "\'"));
print_r(array("\\" => 1));
print_r(array("\\" => "\0"));
print_r(array("\\" => "\\"));
print_r(array("\\" => "\'"));
print_r(array("\'" => 1));
print_r(array("\'" => "\0"));
print_r(array("\'" => "\\"));
print_r(array("\'" => "\'"));
print_r(array("\a" => "\a"));
print_r(!array("\0" => "\0"));
print_r((array("\0" => "\0")));
print_r((int)array("\0" => "\0"));
print_r((integer)array("\0" => "\0"));
print_r((bool)array("\0" => "\0"));
print_r((boolean)array("\0" => "\0"));
print_r((float)array("\0" => "\0"));
print_r((double)array("\0" => "\0"));
print_r((float)array("\0" => "\0"));
print_r((string)array("\0" => "\0"));
$a = "0x10";
print_r($a);
print_r("\0");
$a = array("\0" => 1);
print_r($a);
$a = array("\0" => "\0");
print_r($a);
$a = array("\0" => "\\");
print_r($a);
$a = array("\0" => "\'");
print_r($a);
$a = array("\\" => 1);
print_r($a);
$a = array("\\" => "\0");
print_r($a);
$a = array("\\" => "\\");
print_r($a);
$a = array("\\" => "\'");
print_r($a);
$a = array("\'" => 1);
print_r($a);
$a = array("\'" => "\0");
print_r($a);
$a = array("\'" => "\\");
print_r($a);
$a = array("\'" => "\'");
print_r($a);
$a = array("\a" => "\a");
print_r($a);
}
