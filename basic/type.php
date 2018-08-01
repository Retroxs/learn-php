<?php
$a_bool = TRUE;
$a_str = "foo";
$a_str2 = 'foo';
$an_int = 1;

echo gettype($an_int);

$array = [
    "foo" => "bar",
    "bar" => "foo",
];
$array["foo"] =10;
var_dump($array);
?>