<?php

// MySQL [lab09]> desc users;
// +------------+--------------+------+-----+---------+----------------+
// | Field      | Type         | Null | Key | Default | Extra          |
// +------------+--------------+------+-----+---------+----------------+
// | id         | int          | NO   | PRI | NULL    | auto_increment |
// | first_name | varchar(50)  | YES  |     | NULL    |                |
// | last_name  | varchar(50)  | YES  |     | NULL    |                |
// | username   | varchar(50)  | YES  |     | NULL    |                |
// | email      | varchar(50)  | YES  |     | NULL    |                |
// | phone      | varchar(50)  | YES  |     | NULL    |                |
// | gender     | varchar(50)  | YES  |     | NULL    |                |
// | age        | int          | YES  |     | NULL    |                |
// | password   | varchar(250) | YES  |     | NULL    |                |
// +------------+--------------+------+-----+---------+----------------+

class User {

    //Attributes
    private int $id;
    private string $first_name;
    private string $last_name;
    private string $username;
    private string $email;
    private string $phone;
    private string $gender;
    private int $age;
    private string $password;  

    //Getters
    public function getId() {return $this->id;}
    public function getFirst_name() {return $this->first_name;}
    public function getLast_name() {return $this->last_name;}
    public function getUsername() {return $this->username;}
    public function getEmail() {return $this->email;}
    public function getPhone() {return $this->phone;}
    public function getGender() {return $this->gender;}
    public function getAge() {return $this->age;}
    public function getPassword() {return $this->password;}

    //Verify the password
    function verifyPassword(string $passwordToVerify) {
        //Return a boolean based on verifying if the password given is correct for the current user
        return password_verify($passwordToVerify,$this->password);
    }
}



?>