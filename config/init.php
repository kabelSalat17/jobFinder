<?php

//Start session
session_start();

//config files
require_once 'config.php';

//Messagges system
require_once 'messages/messages-system.php';

//include when init the class automatically

function __autoload($class_name)
{
    require_once 'lib/'.$class_name.'.php';
}
