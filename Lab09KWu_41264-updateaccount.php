<?php

//Require
require_once('inc/config.inc.php');
require_once('inc/Entity/User.class.php');
require_once('inc/Utility/Page.class.php');
require_once('inc/Utility/PDOAgent.class.php');
require_once('inc/Utility/UserDAO.class.php');
require_once('inc/Utility/LoginManager.class.php');

session_start();
//Verify the Login
LoginManager::verifyLogin();
//Initialize the user DAO
UserDAO::init();
//Get the current User thats logged in from the session
$u=UserDAO::getUser($_SESSION['username']);
Page::header();
Page::showUserDetails($u);
Page::footer();
?>