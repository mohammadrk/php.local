<?php

class Db{

//    public  $table;
    public static $prefix;
    public static $table;
    public function all(){
        $table=static::$table;
        return "SELECT * FROM {$table}";
    }

    private function sort(){
        self::$prefix;
        static::$prefix;
    }

    public function delete($id){
        return "DELETE FROM {$this->table} WHERE id={$id}";
    }

    public function find($id,$columns=null){
       $table=static::$table;
        $columns=!is_null($columns) ? implode(",",$columns) : "*";
        return "SELECT {$columns} FROM {$table} WHERE id={$id}";
    }
    public static function export(){

    }
}
$connection=new Db();

$connection->find(56,array("name","email"));
var_dump($connection);
Db::export();
