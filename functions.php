<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/18/14
 * Time: 4:35 PM
 */
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];

if(isset($_SERVER['HTTP_REFERER']))
{
    $http_referer = $_SERVER['HTTP_REFERER'];
}
else
{
    $http_referer = '';
}

//check if user is logged in
function loggedin()
{
    if (isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
    {
        return true;
    }
    else
    {
        return false;
    }
}

//check if user is admin
function isadmin(){
    if (isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
    {
        $user_id = $_SESSION['user_id'];
        $query = mysql_query("SELECT privileges FROM users WHERE id = ".$user_id.";") or die(mysql_error());
        $privilege = mysql_fetch_array($query);
        if($privilege[0] == 'admin')
            return true;
        else
            return false;
    }
    else
    {
        return false;
    }
}