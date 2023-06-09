<?php

class User{
    public $id;
    public $password;
    public $first_name;
    public $last_name;
    public $email;
    public $phone_number;

    public function __construct($id, $password, $first_name, $last_name, $email, $phone_number){
    $this->id = $id;
    $this->password = $password;
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->email = $email;
    $this->phone_number = $phone_number;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
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
