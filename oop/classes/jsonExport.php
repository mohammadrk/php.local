<?php
require_once "oop/interface/canExport.php";
class jsonExport implements canExport{
    public function export()
    {
        echo "data format:json";
    }
}