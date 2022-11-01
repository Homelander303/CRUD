<?php 
    //include 'inc/header.php';
    include "config.php";
    include "database.php";
?>
<link rel="stylesheet" href="style.css">
<!--
<style>
    .design {
        text-align: center;
    }
    .tblone {
        margin: 0 auto;
    }
    .tblone td {
        text-align: center;
    }
</style>
-->

<?php 
$db = new database();
$query = "SELECT * FROM product";
$read = $db->select($query);
?>
<div class="design">
<?php
if(isset($_GET['msg'])){
    echo "<span style='color:green'>".$_GET['msg']."</span>";
}
?>

<table class="tblone">
    <tr>
<!--        <th>id</th> -->
        <th width = "16%">Name</th>
        <th width = "16%">description</th>
        <th width = "16%">quantity</th>
        <th width = "16">price</th>
        <th width = "20%">expire_date</th>
        <th width = "16%">action</th>
    </tr>

    <?php if($read) { ?>
    <?php while($row = $read->fetch_assoc()) { ?>
    <tr>
        <td class="td1" width = "16%"><?php echo $row['Name'];        ?></td>
        <td width = "16%"><?php echo $row['description']; ?></td>
        <td class="td2" width = "16%"><?php echo $row['quantity'];    ?></td>
        <td width = "16%"><?php echo $row['price'];       ?></td>
        <td class="td2" width = "20%"><?php echo $row['expire_date']; ?></td>
        <td width = "16%"><a class="btne" href="update.php?id=<?php echo urldecode($row['id']); ?>">Edit</a>  <a class="btnd" href="delete.php?id=<?php echo urldecode($row['id']); ?>">Delete</a></td>
    </tr>
    
    
    <?php } ?>
    <?php } else { ?>
    <p>data is not available !!</p>
    <?php } ?>
</table>
<a class="btnc" href="create.php">Create</a>
</div>

<?php //include 'inc/footer.php'; ?>
