<?php
session_start();
require_once './class/SelectDB.php';


include("page/header.php");
?>
<body>
<h2>Phonebook</h2>
<?php

if ($_SESSION['auth'] == true) {
    ?>
<div class="menu">

    <button id="logout">Logout</button>
        <input type="button" id="book" value="Public Phonebook">
        <input type="button" id="mycontact" value="My Contact">
</div>

   <br>
    <div id="div_form_log">
        <?php
        include ("page/contact.php");
        ?>
    </div>

    <?php
} else {
    ?>
<div class="menu">
        <button id="log">Login</button>
        <input type="button" id="book" value="Public Phonebook">
</div>
  <br>
    <div id="div_form">
        <?php
        include("page/login.php");
        ?>
    </div>



    <?php
}
if (!empty($_POST['name']) and !empty($_POST['pass'])) {

    $log = new SelectDB();
    $conect = $log->users($_POST['name'], $_POST['pass']);


}

?>


</body>
</html>