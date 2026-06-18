<?php

require_once __DIR__ . '/vendor/autoload.php';

$weatherService = new WeatherService();
$city = 'Vienna';
$weather = $weatherService->getWeather($city);
var_dump($weather);
