<?php

require_once 'City.php';

$cities = [new City('Бугульма', 89000), new City('Альметьевск', 109000), new City('Лениногорск', 85000)];

foreach($cities as $city){
        echo $city->getName() . ' ' . $city->getPopulation();
		echo '<br>';
}