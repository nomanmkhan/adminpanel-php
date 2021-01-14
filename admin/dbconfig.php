<?php 

$mysqli = new mysqli('localhost', 'root','','testing');
$id=0;
$update=false;
$pname = $price = $sell_price = $quantity = "";


//VIEW all records
$result = $mysqli->query("select * from products") or die($mysqli->error);


if(isset($_POST['Submit'])){
    $pname = $_POST['pname'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $sell_price = $_POST['sell_price'];
    

    // for the name.
    $image = basename($_FILES["image"]["name"]);
    $target_dir = "./images/";
    $target_file = $target_dir . $image;
    // echo $target_file;
    // die;

    $mysqli->query("insert into products(name,quantity,price, sell_price, image) values ('$pname','$quantity', '$price', '$sell_price', '$image')");
    // move_uploaded_file()
    move_uploaded_file($_FILES['image']['tmp_name'],$target_file);

    header("location: products.php");

}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("delete from products where id='$id'");


    header("location: products.php");
}


if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update=true;
	$result = $mysqli->query("select * from products where id= $id");
	if(count($result)==1){
		$row = $result->fetch_array();
        $pname = $row['name'];
        $quantity = $row['quantity'];
        $price = $row['price'];
        $sell_price = $row['sell_price'];
        $image = $row['image'];
       
        
        
	}
}

if(isset($_POST['update'])){
	$id= $_POST['id'];
    $pname = $_POST['pname'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $sell_price = $_POST['sell_price'];
    
    

    $image_new = basename($_FILES["image"]["name"]);
    
    $target_dir = "./images/";
    $target_file = $target_dir . $image_new;
    // unlink($target_file);
    


    $result = $mysqli->query("update products set name='$pname',quantity='$quantity', price='$price', sell_price='$sell_price', image = '$image_new' where id = $id");
    // move_uploaded_file()
    move_uploaded_file($_FILES['image']['tmp_name'],$target_file);

	header("location: products.php");

}






?>