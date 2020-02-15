<?php

$token = "871852857:AAG5BPMscXpTAO3zMGZX6xzY_fy65a52GIk";

$comand = "SendMessage";

$answer = file_get_contents("https://api.telegram.org/bot$token/$comand?chat_id=871852857&text=$_POST");

$data = json_decode($answer);

echo "<pre>";
print_r($data);
echo "</pre>";

