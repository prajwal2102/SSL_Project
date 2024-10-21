<?php

$conn = new mysqli("localhost", "root", "", "booklib");

$sql = "CREATE TABLE IF NOT EXISTS seller (
    sid int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    sname VARCHAR(255) NOT NULL,
    semail VARCHAR(255) NOT NULL UNIQUE,
    spassword VARCHAR(255) NOT NULL,
    street VARCHAR(50) NOT NULL,
    city VARCHAR(50) NOT NULL,
    state VARCHAR(50) NOT NULL,
    postalCode VARCHAR(15) NOT NULL
    )";
$result = $conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS products (
pid INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
pname VARCHAR(255) NOT NULL,
price Float(19) NOT NULL,
sid INT(11),
stock INT(11) NOT NULL,
description VARCHAR(1000) NOT NULL,
author VARCHAR(100) NOT NULL,
edition INT(10) NOT NULL,
publitionDate INT(11) NOT NULL,
keywords VARCHAR(255) NOT NULL,
genre VARCHAR(255) NOT NULL,       
CONSTRAINT sid_key FOREIGN KEY (sid)
REFERENCES seller(sid)
)";
$result = $conn->query($sql);
echo "Done";

$conn->close();
    
?>