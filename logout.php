<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/18/14
 * Time: 4:36 PM
 */
require 'functions.php';
session_destroy();
unset($user);
header('Location: '.$http_referer);
