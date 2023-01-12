<?php

class UserDAO   {

    //Store the PDO agent here.
    private static $_db;

    static function init()  {
        //Initialize the internal PDO Agent
        self::$_db = new PDOAgent("User");    
    }

    //Get the user
    static function getUser(string $userName)  {
        $sql = "SELECT * FROM users WHERE username = :username;";
        //Query!
        self::$_db->query($sql);
        //Bind!
        self::$_db->bind(':username',$userName);
        //Execute!
        self::$_db->execute();
        //Return the reuslts!
        return self::$_db->singleResult();
    }

    static function getUsers()  {
        $sql = "SELECT * FROM users;";
        //Query!
        self::$_db->query($sql);
        //Execute!
        self::$_db->execute();
        //Return the reuslts!
        return self::$_db->getResultSet();
    }
    
    
}