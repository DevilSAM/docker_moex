<?php
session_start();
$users = 'admin';
$pass = '21232f297a57a5a743894a0e4a801fc3';
if($_POST['submit']){
    if($users == $_POST['user'] AND $pass == md5($_POST['pass']))
    {
        $_SESSION['admin'] = $users;
        header("Location: index.php");
        exit;
    }
    else {
        echo '<p>Логин или пароль неверны!</p>';
    }
}
?>

<br />
<form method="post">
    Username: <input type="text" name="user" /> <br />
    Password: <input type="password" name="pass" /> <br />
    <input type="submit" name="submit" value="Login" />
</form>