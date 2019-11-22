<?php

session_start();
echo $_SESSION['name'].'<br>';

unset($_SESSION['name']);

echo "Session name is unset!";

echo $_SESSION['name'];