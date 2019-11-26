<?php
require_once "../php.local/oop/classes/htmlExport.php";
require_once "../php.local/oop/classes/jsonExport.php";
require_once "../php.local/oop/classes/xmlExport.php";
$export = "json";
$handler = $export . "Export";
$handlerObject = new $handler;
//$handlerObject->export();
class exportHandler{
    public function doExport(canExport $handler){
        $handler->export();
    }
}
$object=new exportHandler();
$object->doExport($handlerObject);





