<?php

namespace Faraji\WeatherApp;

use GuzzleHttp\Client;

class WeatherService
{
    private Client $client;

    public function __construct(
        private string $apiKey  = '',
        private string $apiUrl = ''
    )
    {
        $this->client = new Client();
    }

    public function getWeather(string $city): array
    {
        $response = $this->client->get($this->apiUrl, [
            'query' => [
                'q' => $city,
                'appid' => $this->apiKey,
                'units' => 'metric',

            ]
        ]);

        $weatherData = json_decode($response->getBody()->getContents(), true);

        return [
            'city' => $weatherData['name'],
            'temperature' => $weatherData['main']['temp'],
            'description' => $weatherData['weather'][0]['description'],
            'humidity' => $weatherData['main']['humidity']
        ];
    }
}