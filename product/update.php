<?php 
    //include 'inc/header.php';
    include "config.php";
    include "database.php";
    //include "ïndex.php";
?>

<?php 
$id = $_GET['id'];
$db = new database();
$query = "SELECT * FROM product WHERE id=$id";
$getData = $db->select($query)->fetch_assoc();

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name        = $_POST['Name'];
    $description = $_POST['description'];
    $quantity    = $_POST['quantity'];
    $price       = $_POST['price'];
    $expire_date = $_POST['expire_date'];
    if($name == '' || $description == '' || $quantity == '' || $price == '' || $expire_date == ''){
        $error = "Field must not be empty !!";
    } else{
        $query = "UPDATE product
        SET
        Name         = '$name',
        description  = '$description',
        quantity     = '$quantity',
        price        = '$price',
        expire_date  = '$expire_date'
        WHERE id = $id";
        $update = $db->update($query);
        
    }

}
?>



<?php
if(isset($error)){
    echo "<span style='color:red'>".$error."</span>";
}
?>
<form action="update.php?id=<?php echo $id; ?>" method="post">
    <table>

        <tr>
            <td>Name</td>
            <td><input type="text" name="Name" value="<?php echo $getData['Name'] ?>"/></td>
        </tr>
        <tr>
            <td>description</td>
            <td><input type="text" name="description" value="<?php echo $getData['description'] ?>"/></td>
        </tr>
        <tr>
            <td>quantity</td>
            <td><input type="text" name="quantity" value="<?php echo $getData['quantity'] ?>"/></td>
        </tr>
        <tr>
            <td>price</td>
            <td><input type="text" name="price" value="<?php echo $getData['price'] ?>"/></td>
        </tr>
        <tr>
            <td>expire_date</td>
            <td><input type="text" name="expire_date" value="<?php echo $getData['expire_date'] ?>"/></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Update"/>
                <input type="reset" value="Cancel"/>

            </td>
        </tr>
    </table>
</form>
<a href="index.php">Go Back</a>
<?php //include 'inc/footer.php'; ?>
