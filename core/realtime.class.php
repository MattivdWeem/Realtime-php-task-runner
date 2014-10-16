<?php

class real_time{


    public function __construct(){

    }

    public function newKey(){
        file_put_contents('.version',md5(time()));
    }

}