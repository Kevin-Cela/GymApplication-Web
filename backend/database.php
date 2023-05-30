<?php

require_once("config.php");

class Database{
    public $connection;

    function __construct()
    {
        $this->open_db_connection();
    }
    public function open_db_connection(){
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if($this->connection->connect_errno){
            die("Database connection failed");
        }else{
            echo "Success";
        }
    }

    // returns an associative array of the results of the query
    public function query($sql){
        $result = $this->connection->query($sql);
        $this->confirm_query($result);
        return $result;
    }


    // returns the id of the last insert into the database
    public function insert_id(){
        return $this->connection->insert_id;
    }


    // returns the input string without special characters
    public function escape_string($string){
        $escaped_string = $this->connection->real_escape_string($string);
    }

    private function confirm_query($result){
        if(!$result){
            die("Query failed");
        }
    }
}

$database = new Database();

?>
