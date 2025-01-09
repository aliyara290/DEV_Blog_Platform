<?php 


function test() {
  $variable = 1;
  $variable++;
  return $variable;
}

$var = test();
echo $var;