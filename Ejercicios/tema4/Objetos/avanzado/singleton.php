<?php

class Singleton {
    private static $instance = null;


    private function __construct (){

    }

    public function getInstance(){
        if(self::$instanceinstance==null){
            self::$instance = new Singleton();
        }

        return self::$instance;
    }
}
?>