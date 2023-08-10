<?php
   //Simple arrays
   $numbers = [1,2,3,4];
   $fruits = array('apple', 'orange', 'banana');

   //print_r($numbers);
   //var_dump($numbers);
   //echo $fruits[1];

   //Associative array
   $person = [
     "first_name" => "Brad",
     "last_name" => "Letsoela",
     "age" => 25
   ];

   $people = [
    [
        "first_name" => "Brad",
        "last_name" => "Letsoela",
        "email" => "clinton@gmail.com"
    ],
    [
        "first_name" => "Jane",
        "last_name" => "Doe",
        "email" => "jane@gmail.com"
    ],
    [
        "first_name" => "John",
        "last_name" => "Doe",
        "age" => "john@gmail.com"
      ]
   ];
   //echo $people[1]['email'];
   var_dump(json_encode($people));