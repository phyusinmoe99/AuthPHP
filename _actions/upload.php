<?php
include("../vendor/autoload.php");
use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;
use Helpers\Auth;

$user = Auth::check();

$tmp_name = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];
$name = $_FILES['photo']['name'];

if($type == "image/jpeg" or $type == "image/png"){
    move_uploaded_file($tmp_name , "photos/$name");
    
    $table = new UsersTable(new MySQL);
    $table->updatePhoto($user->id , $name);

    $user->photo =$name;
    HTTP::redirect("/profile.php");
} else {
    HTTP::redirect("/profile.php" , "error=type");
}