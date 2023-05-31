<?php
require_once("user.php");


class Member extends User{
    private $plan;

    public function getPlan(){
        return $this->plan;
    }
    public function setPlan($plan){
        $this->plan = $plan;
    }
}

?>