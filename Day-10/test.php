<?php
/**
 * Created by PhpStorm.
 * User: FelixWeb
 * Date: 11/21/2019
 * Time: 4:44 PM
 */
session_start();
echo $_SESSION['name'].'<br/>';
echo $_SESSION['city'].'<br/>';
echo $_SESSION['country'].'<br/>';

unset($_SESSION['country']);

echo $_SESSION['country'];