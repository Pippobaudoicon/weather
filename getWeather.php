<?php

    $weather = "";
    $error = "";

    if($_GET['city']){

        $urlcontents = 
        file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".urlencode($_GET['city'])."&appid=[OpenWeatherMap Token]");

        $weatherArray = json_decode($urlcontents, true);

        if($weatherArray['cod'] == 200 ){

            $weather = "The weather in ".ucwords($_GET['city'])." is currently '".$weatherArray['weather'][0]['description']."'. <br>";

            $tempCelsius = intval($weatherArray['main']['temp'] - 273.15);

            $weather .= " The temperature is ".$tempCelsius."&deg;C, and the wind speed is ".$weatherArray['wind']['speed']." m/s.";

        }else{

            $error = "Could not find that city, please try again with a different one.";
        }
    }

?>
