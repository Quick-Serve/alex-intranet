<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/18/14
 * Time: 5:40 PM
 */

$user = $GLOBALS['user'];
$firstname=$user['firstname'];
$surname=$user['surname'];
$userid=$user['id'];

if(isadmin()){
    echo 'Logged in as admin';
}

?>

<p>Welcome to Dashboard <?php echo $firstname . ' ' . $surname .'!' ?> <a  href="logout.php"><input type="button"  value="Logout"/></p>