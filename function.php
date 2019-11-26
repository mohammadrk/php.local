<?php 
 function is_user_logged_in(){
   return true;
 };

 function select_bg($colorName){
   $result="";
   switch($colorName){
     case "blue":
      $result="#00c";
     break;

     case "red":
      $result="#c00";
     break;

     case "green":
      $result="#0c0";
     break;
   }
   return $result;
 }

function get_users(){
  // return null;
  return array(
    array('id'=>'1',"name"=>"ali","email"=>"ali@gmail.com"),
    array('id'=>'2',"name"=>"amir","email"=>"amir@gmail.com"),
    array('id'=>'3',"name"=>"arash","email"=>"arash@gmail.com"),
  );
}

?> 