<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "sooq";

     $con = new mysqli($servername , $username , $password , $dbname);
     if($con->connect_error){
         die("Connection Failed : " . $con->connect_error);
     } else {
        // Product Info
    $id = $_POST['id'];
    $title = $_POST['title'];
    $price = $_POST['price'];
        // User Info 
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $size = $_POST['size'];
    $color = $_POST['color'];
    $quantity = $_POST['quantity'];

    $stmt = $con->prepare("INSERT INTO  user(
    Name,
    Phone_Number,
    Size,
    Color,
    Quantity,
    id_product,
    Title_product,
    Price)
     VALUES
    (?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssss",$name,$phone,$size,$color,$quantity,$id,$title,$price);
    $stmt->execute();
    header('Location: Sooq.php?note=The Order Has Been Sent');
    exit;
}
?>