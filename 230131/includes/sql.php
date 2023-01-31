<?php
    function index()
    {
        $con = Connect();
        $sql = "Select * from szendvicsek";
        $result = mysqli_query($con,$sql);
        mysqli_close($con);
        return $result;
    }

    function Add($name, $desc, $price){
        $con = Connect();
        $sql = "INSERT INTO szendvicsek (name, desc, price) 
        VALUES('$name', '$desc', '$price')";
        mysqli_query($con, $sql);
        mysqli_close($con);
    }
?>