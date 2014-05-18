<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/18/14
 * Time: 6:17 PM
 */
include 'include/header.php';
if($_POST){
if(($_POST['username']) && ($_POST['password']) && ($_POST['firstname']) && ($_POST['surname']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $password_hash=md5($password);

    $result = mysql_query("SELECT username FROM users WHERE username = '$username'") or die(mysql_error());
    $user = mysql_fetch_array($result);
    if($user[0])
    {
        $warning = "Username already exists!";
    }

    mysql_query("
        INSERT INTO users (username,password,firstname,surname,privileges) VALUES
        ('$username','$password_hash','$firstname','$surname','regular');
    ");
    $success = "User ".$username." is successfully added.";
}
else{
    $warning = 'All fields are required!';

}
}





if($success) echo $success;
else if(isadmin()){
?>

    <form role="form"  action="<?php echo $current_file; ?>" method="POST" >
        <h2>Add new user</h2>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <input type="text" name="firstname" id="firstname" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname'];?>" class="form-control input-lg"  placeholder="First Name" tabindex="1">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <input type="text" name="surname" id="surname" value="<?php if(isset($_POST['surname'])) echo $_POST['surname'];?>"  class="form-control input-lg" placeholder="Last Name" tabindex="2">
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="text" name="username" id="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'];?>" class="form-control input-lg" placeholder="Username" tabindex="3">
        </div>
        <div class="form-group">
            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
        </div>


        <div class="row">
            <div class="col-xs-6 col-md-6"><input type="submit" value="Submit" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>

        </div>
    </form>


<?php
    if($warning) echo $warning;

}
else header("Location: index.php");


include 'include/footer.php';