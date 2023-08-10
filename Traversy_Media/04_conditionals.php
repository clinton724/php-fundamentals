<?php
  //---------If statements------------
  /*
    if (condition) {
        code to be executed if the condition is true
    }
  */
  /*$age = 17;

  if($age >= 18) {
    echo 'You are old enough to vote.';
  } else {
    echo 'You are not old enough to vote.';
  }*/

  $t = date("H");

  /*if($t < 12) {
    echo 'Good Morning';
  } elseif($t >=12 && $t < 17){
    echo 'Good Afternoon';
  } else {
    echo 'Good Evening';
  }*/

  $posts = ['First Post'];

 /* if(!empty($posts)) {
    echo $posts[0];
  } else {
    echo 'No Posts';
  }*/

 // echo !empty($posts) ? $posts[0] : 'No Posts';

  //-----------Switch statement-----------
  $favcolor = 'yellow';
  switch($favcolor) {
    case 'red':
        echo 'Your favorite color is red.';
        break;
    case 'blue':
        echo 'Your favorite color is blue.';
        break;
    case 'green':
        echo 'Your favorite color is green.';
        break;
    default:
        echo 'Your favorite color is not red, blue or green.';
  }