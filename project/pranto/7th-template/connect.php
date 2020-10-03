<?php
$username= $_POST['username'];
$productname= $_POST['productname'];
$color= $_POST['color'];
$size= $_POST['size'];
$phone= $_POST['phone'];
$price= $_POST['price'];

if(empty($username) || empty($productname) || empty($color) || empty($phone) || empty($price)){
    header("Location: home.php?error=emptyfields");
    $stmt -> close();
    $conn -> close();
}

$conn= new mysqli('localhost' , 'root', '', 'loginsystem');
if($conn->connect_error){
    die('Connection Failed :' .$conn->connect_error);
}else{
    $stmt= $conn->prepare("INSERT INTO `info`(`username`, `productname`, `color`, `size`, `price`, `phone`)
     VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("sssssi",$username,$productname,$color,$size,$price,$phone);
    $stmt->execute();
    header("Location: show.php");
    $stmt -> close();
    $conn -> close();
}



?>