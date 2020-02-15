<?php

$token = "871852857:AAG5BPMscXpTAO3zMGZX6xzY_fy65a52GIk";

$comand = "sendMessage";

$answer = file_get_contents("https://api.telegram.org/bot$token/$comand?text=hello");

$data = json_decode($answer);

echo "<pre>";
print_r($data);
echo "</pre>";

