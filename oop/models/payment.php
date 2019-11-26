<?php
require_once "../db.php";

class Payment extends Db
{
    function __construct()
    {
         $this->table="payments";
    }

    public function get_all_payment__by_user_id($user_id)
    {
        return "SELECT * FROM {$this->table} WHERE payement_user_id={$this->$user_id}";

    }


}
$user1=new Db();

