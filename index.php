<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/18/14
 * Time: 4:36 PM
 */


include_once('include/header.php');
if(loggedin())
{
    $rightvar=$_SESSION['user_id'];
    $result = mysql_query("SELECT * FROM users WHERE id = $rightvar") or die(mysql_error());
    $user = mysql_fetch_array($result);
    $GLOBALS['user'] = $user;
    $firstname=$user['firstname'];
    $surname=$user['surname'];
    $userid=$user['id'];

    include 'include/dashboard.php';
}
else
{
    include 'include/login.inc.php';
}

include_once('include/footer.php');