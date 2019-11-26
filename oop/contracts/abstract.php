<?php

abstract class onlineGateway
{
    protected $options;

    public function __construct()
    {
        $this->options = array(
            'mellat' => array(
                'merchant' => '13456', 'password' => 'xc134s'),
            'saman' => array(
                'username' => '123sda', 'password' => 'sadsa12'
            ),
            'parsian' => array(
                'api_key' => 'asdsadadadsd'
            )
        );
    }

    abstract public function sendRequest();

    abstract public function verifyRequest();

}

class Mellat extends onlineGateway
{
    private $gatewayName;
    private $mellat_options;
public function __construct()
{
    $this->gatewayName='mellat';
    parent::__construct();
    $this->mellat_options=$this->options[$this->gatewayName];
}

    public function sendRequest()
    {
    var_dump($this->mellat_options);
    }

    public function verifyRequest()
    {

    }
}
//$mellat=new Mellat();
//$mellat->sendRequest();
$gateWay=Factory::make('mellat');
$gateWay->sendRequest();

class Factory{
    public static function make($class){
        $className=ucfirst($class);
        if (!class_exists($className)){
          return false;
        }
        return new $className;
    }
}

