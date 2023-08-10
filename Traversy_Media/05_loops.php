<?php
   //----------For loop-------------
   /*
     for(initialize; condition; increment) {
        code to be executed
     }
   */ 
   /*for($x = 0; $x <= 10; $x++) {
      echo "Number $x <br>";
   }*/

   //---------While loop-------------
   /*
      while (condition) {
        code to be executed
      }
   */
 /* $x = 1;

  while($x <= 15){
    echo "Number $x <br>";
    $x++;
  }*/

  //-----------do while loop-----------

  /*
     do {
       //code to be executed
     } while (condition)
  */

  //--------Foreach------------ *Important*
  /*
     foreach($array as $value) {
        code to be executed
     }
  */
  $posts = ['First Post', 'Second Post', 'Third Post'];
 /* for($x = 0; $x < count($posts);$x++) {
     echo $posts[$x].'<br>';
  }*/

  /*
  foreach($posts as $index => $post) {
    echo $index.' - '.$post.'<br>';
  }*/
  $person = [
    "first_name" => "Brad",
    "last_name" => "Letsoela",
    "age" => 25
  ];
  foreach($person as $key => $value) {
    echo $key.' - '.$value.'<br>';
  }