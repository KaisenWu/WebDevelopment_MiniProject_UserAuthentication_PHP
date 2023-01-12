<?php

class LoginManager  {

    //This function checks if the user is logged in, if they are not they are redirected to the login page
    static function verifyLogin()   {
        //Check for a session
        // if(empty($_SESSION)) {
        //     //Start it up
        //     session_start();
        //     //If there is session data
        //     if(!empty($_SESSION)) {
        //         //The user is loggedin, return true
        //         return true;
        //     }
        //     else {
        //         //The user is not logged in
        //         //Destroy any session just in case
        //         session_destroy();    
        //         //Send them back to the login pages
        //         header("Location:Lab09KWu_41264-login.php");
        //         return false;    
        //     }
        // } 
        if(empty($_SESSION)) {
            session_destroy();
            header("Location:Lab09KWu_41264-login.php");
        }
        else {
            return true;
        }
    }

            
}

?>