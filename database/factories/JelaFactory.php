<?php


$factory->define(App\Jela::class, function () {
    static $id = 1;
    $faker = \Faker\Factory::create();
$faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));

$GenerirajHranu = $faker->foodName();
    $data =  [
       
        // "naziv" =>$GenerirajHranu . $id . " na En jeziku" ,
        "naziv" =>"naziv jela " . $id . " na Hr jeziku" ,
        'opis' => "Opis jela " . $id ." na Hr jeziku",
      
    ];
     $id++;
    return $data;
});

