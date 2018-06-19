<?php
session_start();

require_once 'vendor/Login.php';

include("page/header.php");
?>
<body>
<h2>Phonebook</h2>
<?php

if ($_SESSION['auth'] == true) {
    ?>
    <form class="menu">
        <input type="button" id="logout" value="Logout" >
        <input type="button" id="book" value="Public Phonebook">
        <input type="button" id="mycontact" value="My Contact">

    </form><br>
    <div class="div_form">

    </div>
    <?php
} else {
    ?>
    <form class="menu">
        <input type="button" id="log" value="Login">
        <input type="button" id="book" value="Public Phonebook">
    </form><br>
    <div class="div_form">

    </div>
    <?php
}
if (!empty($_POST['name']) and !empty($_POST['pass'])) {

    $log = new Login($_POST['name'], $_POST['pass']);
    $conect = $log->connect();


}

?>

</body>