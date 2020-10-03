<?php 
    include_once "databased.php";

    class mainClass{

            private $db;
            function __construct(){
                $this->db=new databased();
            }

            

    }
    
?>