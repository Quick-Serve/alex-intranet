<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/18/14
 * Time: 4:35 PM
 */
if(isset($_POST['username'])&&isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_hash=md5($password);

//echo $password_hash;

    if(!empty($username)&&!empty($password))
    {
        $query = mysql_query("SELECT * FROM users WHERE username ='".$username."' AND password ='".$password_hash."'") or die(mysql_error());

        $data = mysql_fetch_array($query);

        $test=$data['password'];

        $query_run=$query;
        $query_num_rows = mysql_num_rows($query_run);
        if($query_num_rows==0)
        {
            echo 'Invadid username/password combination.';
        }
        else if($query_num_rows==1)
        {
            echo 'ok';
            $user_id = mysql_result($query_run,0,'id');
            $user_id = $data['id'];
            $_SESSION['user_id'] = $user_id;
            header("Location:".$_SERVER['PHP_SELF']. " ");
        }
        {
        }

    }
    else
    {
        echo 'You must supply a username and password';
    }

}

?>
<link href="../css/signin.css" rel="stylesheet">

    <form class="form-signin" role="form" action="<?php echo $current_file; ?>" method="POST" >
        <i class="fa fa-user fa-6" style="font-size: 7em; color:#38709F;width: 0.8em;display: block;margin: 0 auto;  text-shadow: 0px 0px 2px rgba(255, 255, 255, 1);"></i>
        <input type="text" class="form-control" name="username" placeholder="Username"  required="" autofocus="">
        <input type="password" name="password" class="form-control" placeholder="Password" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit">LOGIN</button>
    </form>


