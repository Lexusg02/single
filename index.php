<?php

class Singleton{

    protected static $instance;

    private function __constructor(){}

    private function __clone(){}

    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new self;
        }
        return self::$instance;
    }


    public function doApp(){
        
    }

}