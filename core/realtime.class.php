<?php

class real_time{


    public function __construct(){

    }

    public function newKey(){
        $key = md5(time()).rand(1,9999);
        file_put_contents('.version',$key);
        return $key;
    }

}