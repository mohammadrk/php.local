<?php
//require_once "oop/classes/class-finalClass.php";
new finalClass();

function __autoload($className){
   $filename='class-'.$className.'.php';

   $filePath=__DIR__.DIRECTORY_SEPARATOR.'oop'.DIRECTORY_SEPARATOR.'classes'.DIRECTORY_SEPARATOR.$filename;

   if (file_exists($filePath)){
      require_once $filePath;
  }else{
       echo "no file";
   }
}
