<?php  
    include("includes/header.php");
    $id = $_GET['id'];
    Delete($id);
    header("Location: success.php?q=3");

?>