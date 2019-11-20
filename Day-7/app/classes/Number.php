<?php
/**
 * Created by PhpStorm.
 * User: FelixWeb
 * Date: 11/20/2019
 * Time: 12:47 PM
 */

namespace App\classes;


class Number
{
    public function catchNumber(){
        $data = (object)$_POST;
        return $data;
    }
}