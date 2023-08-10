<?php
   setcookie('name', 'Brad', time() + 86400*30);

   if(isset($_COOKIE['name'])) {
     echo $_COOKIE['name'];
   }

   //deleting a cookie
   setcookie('name', '', time()-86400);