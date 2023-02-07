<?php
    include("includes/header.php");
    $result = index();
?>
<div class='container my-5'>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result))
            {
                echo "
                <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[desc]</td>
                    <td>$row[price]</td>
                </tr>";
            }
        ?>
    </table>
</div>
<?php
    include("includes/footer.php");
?>