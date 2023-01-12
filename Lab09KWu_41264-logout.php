<?php
//Require files
require_once('inc/config.inc.php');
require_once('inc/Entity/User.class.php');
require_once('inc/Utility/Page.class.php');
require_once('inc/Utility/PDOAgent.class.php');
require_once('inc/Utility/UserDAO.class.php');
require_once('inc/Utility/LoginManager.class.php');

//Start the sesion... one last time!
session_start();
//Destroy the sesison
session_destroy();

Page::header();
Page::thankYou();
Page::footer();
?>
<form ACTION="Lab09KWu_41264-login.php">
    <input type="submit" name="btnLoginAgain" value="Login again">
</form>