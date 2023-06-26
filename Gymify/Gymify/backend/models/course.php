<?php

class Course{
    private $id;
    private $name;
    private $type;
    private $description;
    private $price;
    private $coach;


    //getters and setters
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getType(){
        return $this->type;
    }
    public function setType($type){
        $this->type = $type;
    }
    public function getDescription(){
        return $this->description;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function getPrice(){
        return $this->price;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function getCoach(){
        return $this->price;
    }
    public function setCoach($coach){
        $this->coach = $coach;
    }
    //end of getters and setters
}

?>