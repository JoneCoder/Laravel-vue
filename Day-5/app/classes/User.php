<?php
/**
 * Created by PhpStorm.
 * User: FelixWeb
 * Date: 11/19/2019
 * Time: 3:52 PM
 */

namespace App\classes;


class User
{
    public function makeFullName(){
        $user = (object)$_POST;
        $firstName = $user->firstName;
        $lastName = $user->lastName;
        $fullName = $firstName.' '.$lastName;
        return $fullName;
    }
}