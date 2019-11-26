<?php
function verify_age(){
    global  $age;
    if ($age>25){
        echo "your age is.{$age}";
    }else{
        echo  "بزرگتر از 25 نیست.";
    }
}