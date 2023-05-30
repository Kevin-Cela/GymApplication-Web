<?php

abstract class User{
    private $id;
    private $username;
    private $password;
    private $first_name;
    private $last_name;
    private $age;
    private $email;
    private $phone_number;


    // getters and setters
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getUsername(){
        return $this->username;
    }
    public function setUsername($username){
        $this->username = $username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function getFirstName(){
        return $this->first_name;
    }
    public function setFirstName($first_name){
        $this->first_name = $first_name;
    }
    public function getLastName(){
        return $this->last_name;
    }
    public function setLastName($last_name){
        $this->last_name = $last_name;
    }
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getPhoneNumber(){
        return $this->phone_number;
    }
    public function setPhoneNumber($phone_number){
        $this->email = $phone_number;
    }

    //end of getters and setters
}

?>