<?php  
    include("includes/header.php");
    $id = $_GET['id'];
?>
<div class='container my-5 text-center'>
    <h1 class="text-center display-6 py-3">Are you sure?</h1>
    <a href="delete_page.php?id=<?php echo $id?>" class="btn btn-danger">Yes, Delete</a>
    <a href="delete.php" class="btn btn-outline-primary">Cancel</a>
</div>
