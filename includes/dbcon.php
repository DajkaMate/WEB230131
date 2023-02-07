<?php
    function Connect(){
        $szerver = "localhost" ;
        $user    = "root";
        $pass    = "";
        $db_name = "14 sz2";

        $con = mysqli_connect($szerver,$user,$pass,$db_name);

        if(!$con){
            die("Nem sikerült csatlakozni");
        }
        return $con;
    }
?>