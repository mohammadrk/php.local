<?php
require_once "oop/interface/canExport.php";
class htmlExport implements canExport {
    public function export()
    {
        echo "data format :html";
    }
}

