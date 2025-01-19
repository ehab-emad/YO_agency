<?php
require "connect.php";


    $art_name = $_POST['art_name'];
    $art_description = $_POST['art_description'];

   
    $stmt = $connect->prepare("INSERT INTO `artical`(`art_name`, `art_description`) VALUES (?, ?)");
    $stmt->bind_param("ss",$art_name,$art_description);
    if ($stmt->execute()) {
        header("Location: ../?page=articals");
        exit(); 
    $stmt->close();}
