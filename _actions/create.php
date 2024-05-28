<?php
include ("../vendor/autoload.php");
use Libs\Database\MySQL;
 use Libs\Database\UsersTable;
 use Helpers\HTTP;

 $data = [
    "name" => $_POST['name'],
    "email" => $_POST['email'],
    "phone" => $_POST['phone'],
    "address" => $_POST['address'],
    "password" => $_POST['password'],
 ];
 $table = new UsersTable(new MySQL);

 if($table){
    $table->insert($data);
    HTTP::redirect("/index.php","registered");
 }else{
    HTTP::redirect("/register.php","error");
 }
