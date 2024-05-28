<?php

include("vendor/autoload.php");
//use Helpers\HTTP;
use Faker\Factory as Faker;
//use Helpers\Auth;

use Libs\Database\MySQL;
use Libs\Database\UsersTable;

// $faker = Faker::create();
// echo $faker->email();
// echo "<br>";

// Auth::check();


//  $mysql = new MySQL;
//  $db=$mysql->connect();

//  $result = $db->query("SELECT * FROM roles");
//  print_r($result->fetchAll());

$table = new UsersTable(new MySQL);
$faker = Faker::create();

echo "Starting <br>";
for ($i = 0; $i < 20; $i++) {
    $table->insert(
        [
            "name" => $faker->name,
            "email" => $faker->email,
            "phone" => $faker->phoneNumber,
            "address" => $faker->address,
            "password" => "password",
        ]
    );
}
echo "Done";


//HTTP::redirect("/index.php" , "http=test");
//Auth::check();