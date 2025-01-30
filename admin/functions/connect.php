<?php

define("SERVER", "sql105.infinityfree.com");
define("USER", "if0_38202113");
define("PASSWORD", "QHruPX3XSlhX");
define("DBNAME", "if0_38202113_mmmmmmm");

$connect = new mysqli(SERVER, USER, PASSWORD, DBNAME);

if ($connect->connect_error) {
    die("فشل الاتصال: " . $connect->connect_error);
} else {
    echo "تم الاتصال بنجاح";
}
?>
