<?php
include "tools.php";

$mydb = new conquer("mysql:host=localhost;port=3306;dbname=blog_vahramejevs;user=root;password=;charset=utf8mb4;");

// $mydb->send_query("INSERT INTO posts(title) VALUES ('My fourth blog from PHP PDO');");
// $mydb->send_query("SELECT * FROM posts;");
// $mydb->dump();
$mydb->dump_table("posts");

$mexico = "mysql:host=localhost;port=3306;dbname=blog_vahramejevs;user=root;password=;charset=utf8mb4;";
$dbcon = new PDO($mexico);
$quer = $dbcon->prepare("SELECT * FROM posts");
$quer->execute();
$quer->fetchAll();

// dd($quer->fetchAll());
?>