<?php
    include("includes/header.php");
    $id = $_GET['id'];
    $result = Id($id);
    $row = mysqli_fetch_array($result);
    $name = $row['name']; 
    $desc = $row['desc']; 
    $price = $row['price']; 
    $error = "";    

    $mess = array("name" => "","desc" => "", "price" => "");

    if(isset($_POST["add"]))
    {  
        if(empty($_POST["name"]))
        {
           $mess["name"] = "Empty field!";
        }
        else
        {
            $name = $_POST['name'];
        }
        if(empty($_POST["desc"]))
        {
            $mess["desc"] = "Empty field!";
        }
        else
        {
            $desc = $_POST['desc'];
        }
        if(empty($_POST["price"]))
        {
            $mess["price"] = "Empty field!";
        }
        else
        {
            $price = $_POST['price'];
        }
        if(array_filter($mess)){
            $error = true;
        } 
        else 
        {
            Edit($name, $desc, $price, $id);
            header("Location: success.php");
        }
    }
?>
    <div class="container pb-2">
        <h1 class="text-center display-6 py-3">Add</h1>
        <div class="card m-auto" style="width: 20rem;">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."?id="."$id"?>" method="post">
                <div class="card-body">
                    <div class="my-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value='<?php echo "$name"?>'>
                        <?php if($error == true) {
                            echo "<strong class='text-danger'>".$mess['name']."</strong>";
                        } ?>
                    </div>
                    <div class="my-3">
                        <label for="desc" class="form-label">Description</label>
                        <textarea type="text" name="desc" class="form-control"><?php echo "$desc"?></textarea>
                        <?php if($error == true) {
                            echo "<strong class='text-danger'>".$mess['desc']."</strong>";
                        } ?>
                    </div>
                    <div class="my-3">
                        <label for="price" class="form-label">Price:</label>
                        <input type="numver" name="price" class="form-control" value='<?php echo "$price"?>'>
                        <?php if($error == true) {
                            echo "<strong class='text-danger'>".$mess['price']."</strong>";
                        } ?>
                    </div>
                    <button type="submit" name="add" class="btn btn-primary d-block m-auto">Regisztráció</button>
                </div>
            </form>
        </div>
    </div>
<?php
    include("includes/footer.php");
?>
