<?php
session_start();
require_once './class/SelectDB.php';


include("page/header.php");
?>
<body>
<h2>Phonebook</h2>
<?php
if(!empty($_SESSION['auth'])){
if ($_SESSION['auth'] == true) {
    ?>
<div class="menu">
    <a href="" class="btn" id="log">Logout</a>
    <a href="" class="btn" id="public_contact">Public Contact</a>
    <a href="/page/contact.php" class="btn" id="my_contact">My Contact</a>
</div>

    <?php
}
}else {
    ?>
<div class="menu">
        <a href="page/login.php" class="btn" id="log">Login</a>
        <a href="page/" class="btn" id="public_contact">Public Contact</a>
</div>

    <?php
}

    if(isset($_POST['submit'])) {

    }
    ?>


<br>
<div id="ajax_container">

</div>


</body>
</html>