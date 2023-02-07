<?php
    include("includes/header.php");
    $sv = $_GET['q'];
?>
<div class='container my-5'>
    <h1 class='text-center display-6 py-3'>
    <?php 
        if($sv == 1)
        {
            echo "Add successful!";
        }
        else if($sv == 2)
        {
            echo "Edit successful!";
        }
        else
        {
            echo "Delete successful!";
        }

    ?>
    </h1>
</div>
<?php
    include("includes/footer.php");
?>