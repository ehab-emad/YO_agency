<?php

define("SERVER", "localhost");
define("USER", "root");
define("PASSWORD", "Ff5192aa");
define("DBNAME", "yoagency");

$connect = new mysqli(SERVER, USER, PASSWORD, DBNAME);

if (!$connect) {
    echo "not connected";
}
