<?php
   function registerUser($email) {
     echo $email.' registered.';
   }
   
   //registerUser('clinton@gmail.com');

   function sum($n1, $n2) {
     return $n1+$n2;
   }

   //echo sum(2,6);
   //Anonymous functions
   $subtract = function($n1, $n2) {
     return $n1-$n2;
   };
   //echo $subtract(10,5);

   //Arrow function
   $multiply = fn($n1,$n2) => $n1*$n2;
   echo $multiply(10,5);
