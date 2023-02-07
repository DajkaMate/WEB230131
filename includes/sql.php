<?php
    function index(){
        $con = Connect();
        $sql = "SELECT * from szendvicsek";
        $result = mysqli_query($con,$sql);
        mysqli_close($con);
        return $result;
    }

    function Name($name){
        $con = Connect();
        $sql = "SELECT * from szendvicsek where name like '$name'";
        $result = mysqli_query($con,$sql);
        $sv = mysqli_num_rows($result);
        return $sv;
        mysqli_close($con);
    }   

    function Id($id)
    {
        $con = Connect();
        $sql = "SELECT * FROM szendvicsek WHERE id LIKE '$id'";
        $result = mysqli_query($con, $sql);
        return $result;
        mysqli_close($con);
    }

    function Add($name, $desc, $price){
        $con = Connect();
        $sql = "INSERT INTO szendvicsek (`name`, `desc`, `price`) 
        VALUES('$name', '$desc', '$price')";
        mysqli_query($con, $sql);
        mysqli_close($con);
    }

    function Edit($name, $desc, $price, $id)
    {
        $con = Connect();
        $sql = "UPDATE szendvicsek SET `name` = '$name', `desc` = '$desc', `price` = '$price' where id = '$id'";
        mysqli_query($con, $sql);
        mysqli_close($con);
    }

    function Delete($id)
    {
        $con = Connect();
        $sql = "DELETE FROM szendvicsek WHERE id = '$id'";
        mysqli_query($con, $sql);
        mysqli_close($con);
    }
?>