<?php
trait logger{
    public function log($data){
        echo "{$data} data";
    }
}
class sample{
    use logger;
}
(new sample())->log("abc");