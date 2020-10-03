<?php 
    class databased{
    public $dbname="picchichat";
    public $user="root";
    public $pass="";
    public $host="localhost";

    public $link;
    public $error;

    public function __construct(){
        $this->connectDb();
    }

    private function connectDb(){
        $this->link=new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if(!$this->link){
            $this->$error="Connection fail".$this->link->connect_error;
            return false;
        }
    }

    public function select($query){
        $result=$this->link->query($query);
        if($result->num_rows > 0){
            return $result;
        }else{
            return false;
        }
    }

    public function insert($query){
        $insert_value=$this->link->query($query);
        if($insert_value ){
            return $insert_value;
        }else{
            return false;
        }
    }


    function update($query){
        $update_value=$this->link->query($query);
        if($update_value){
            return $update_value;
        }else{
            return false;
        }
    }


    function delete($query){
        $delete_value=$this->link->query($query);
        if($delete_value){
            return $delete_value;
        }else{
            return false;
        }
    }
    }
    
?>