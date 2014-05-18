<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/18/14
 * Time: 4:34 PM
 */
$dbc = mysql_connect('localhost','root','root') or  die("Cant connect :" . mysql_error());

mysql_select_db("intranet",$dbc)

or
die("Cant connect :" . mysql_error());
