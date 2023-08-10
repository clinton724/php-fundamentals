<?php
  //Array functions are used for working with arrays and array data
  $fruits = ['apple', 'orange', 'pear'];

  //Get the length of the array
  //echo count($fruits);

  //Search array
  //var_dump(in_array('apples', $fruits));

  //Add to the array
  $fruits[] = 'grape';
  array_push($fruits, 'blueberry');
  array_unshift($fruits, 'mango');

  //Remove from array
  array_pop($fruits);
  array_shift($fruits);

  //Split into 2 chunks
  $chunked_array = array_chunk($fruits, 3);
  //print_r($chunked_array);
  //print_r($fruits);

  //Concatenate arrays
  $arr1 = [1,2,3];
  $arr2 = [4,5,6];

  $arr3 = array_merge($arr1, $arr2);
  //print_r($arr3);

  $a = ['green', 'red', 'yellow'];
  $b = ['avacado', 'apple', 'banana'];
  $c = array_combine($a, $b);

  $keys = array_keys($c);
  //print_r($keys);

  $numbers = range(1,20);
  //print_r($numbers);

  $newNumbers = array_map(function($number) {
    return "Number $number";
  }, $numbers);
  //print_r($newNumbers);

  $lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
  print_r($lessThan10);
