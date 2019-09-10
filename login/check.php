<?php
 
require_once '../config.php';
require 'functions.php';
 
if (!isLoggedIn())
{
    header('Location: form-login.php');
}
