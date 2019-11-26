<?php
function set_method(){
    if (isset($_POST['status'])){
        $set_name=$_POST['status'];
        return $set_name();

    }else{
        return  default1();
    }
}
function yes(){
    echo "func yes";
}
function no(){
    echo "func no";
}
function cancel(){
    echo "func cancel";
}
function default1(){
    echo "func default1";
}