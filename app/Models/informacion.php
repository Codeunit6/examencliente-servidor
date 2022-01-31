<?php

namespace App\Models;


class Informacion{
    public $facebook;
    public $git;
    public $twitter;

    public function llenarfacebook(){
        $this->$facebook="https://www.facebook.com/BlackF.art/";
        return $facebook;
    }
    public function llenargit(){
        $this->$git="https://github.com/Codeunit6";
        return $git;
    }
    public function llenartwitter(){
        $this->$twitter="https://twitter.com/hackingzone";
        return $twitter;
    }

}