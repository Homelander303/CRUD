<?php 
    //include 'inc/header.php';
    include "config.php";
    include "database.php";
    //include "ïndex.php";
?>
<link rel="stylesheet" href="style.css">

<?php 
$db = new database();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name        = $_POST['Name'];
    $description = $_POST['description'];
    $quantity    = $_POST['quantity'];
    $price       = $_POST['price'];
    $expire_date = $_POST['expire_date'];
    if($name == '' || $description == '' || $quantity == '' || $price == '' || $expire_date == ''){
        $error = "Field must not be empty !!";
    } else{
        $query = "INSERT INTO product(Name, description, quantity, price, expire_date) Values('$name', '$description', '$quantity', '$price', '$expire_date')";
        $create = $db->insert($query);
        
    }

}
?>

<?php
if(isset($error)){
    echo "<span style='color:red'>".$error."</span>";
}
?>
<form action="" method="post">
    <table class="tbl2">

        <tr>
            <td>Name</td>
            <td><input type="text" name="Name" placeholder="please enter neme"/></td>
        </tr>
        <tr>
            <td>description</td>
            <td><input type="text" name="description" placeholder="enter description"/></td>
        </tr>
        <tr>
            <td>quantity</td>
            <td><input type="text" name="quantity" placeholder="enter quantity"/></td>
        </tr>
        <tr>
            <td>price</td>
            <td><input type="text" name="price" placeholder="enter price"/></td>
        </tr>
        <tr>
            <td>expire_date</td>
            <td><input type="text" name="expire_date" placeholder="enter expire_date"/></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Submit"/>
                <input type="reset" value="Cancel"/>

            </td>
        </tr>
    </table>
</form>
<a href="index.php">Go Back</a>
<?php //include 'inc/footer.php'; ?>
