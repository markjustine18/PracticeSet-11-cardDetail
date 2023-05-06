<?php
require './vendor/autoload.php';
$faker = Faker\Factory::create();

require 'config/config.php';
require 'config/db.php';

for ($i = 0; $i < 20; $i++) {
    $creditCardType = $faker->creditCardType;
    $creditCardNumber = $faker->creditCardNumber;
    $creditCardExpirationDate = $faker->creditCardExpirationDate;
    $userIdNumber = rand(1, 100);
    $expirationDate = $creditCardExpirationDate->format('Y-m-d');

    $sql = "INSERT INTO cardDetail(creditCardType, creditCardNumber, creditCardExpirationDate, userIdNumber) 
            VALUES ('$creditCardType', '$creditCardNumber', '$expirationDate', '$userIdNumber')";

    mysqli_query($conn, $sql);
}

?>