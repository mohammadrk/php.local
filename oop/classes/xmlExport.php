<?php

require_once "oop/interface/canExport.php";
class xmlExport implements canExport{
    public function export()
    {
        echo "data format : xml";
    }
}