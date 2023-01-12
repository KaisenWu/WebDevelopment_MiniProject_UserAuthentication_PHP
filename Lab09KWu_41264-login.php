<?php
//Require Files
require_once('inc/config.inc.php');
require_once('inc/Entity/User.class.php');
require_once('inc/Utility/Page.class.php');
require_once('inc/Utility/PDOAgent.class.php');
require_once('inc/Utility/UserDAO.class.php');
require_once('inc/Utility/LoginManager.class.php');

//Check if the form was posted
if(!empty($_POST) && isset($_POST)) {
    //Initialize the DAO
    UserDAO::init();
    //Get the current user 
    //Check the DAO returned an object of type user
    $authUser = UserDAO::getUser($_POST["txtUserName"]);
    if($authUser) {
        //Check the password
        if ($authUser->verifyPassword($_POST['txtPassword']))  {
            //Start the session
            session_start();
            //Set the user to logged in
            $_SESSION['username']=$authUser->getUsername();
            //Send the user to the user managment page Lab09KWu_41264-updateaccount.php
            header("Location:Lab09KWu_41264-updateaccount.php");
        }
    }
}

//Set the age Title
Page::header();
Page::showLogin();
Page::footer();


?>