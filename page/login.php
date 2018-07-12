<?Php
session_start();
?>
<div id="ajax_form" >
    <?php

    if (!empty($_POST['user']) and !empty($_POST['pass'])) {

    $log = new SelectDB();
    $conect = $log->users($_POST['user'], $_POST['pass']);
    if(!empty($conect)){
    $_SESSION['rows'] = $conect;
    } else {
    echo 'Error login and password';
    }

    }
    ?>
<h2>Login</h2>
<form  action='/index.php' method="POST" id="login-menu">
    <label for="user">Username: </label>
    <input type="text" name="user" id="user"><br><br>
    <label for="pass"> Password: </label>
    <input type="password" name="pass" id="pass" ><br><br>
    <input type="submit"  name="submit" class="btn" id="btn-login"  value="Login">
</form>

</div>




