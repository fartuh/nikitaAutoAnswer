<?php

$token = "871852857:AAG5BPMscXpTAO3zMGZX6xzY_fy65a52GIk";

$comand = "SendMessage";

$post = $_POST['message'];

$answer = file_get_contents("https://api.telegram.org/bot$token/$comand?chat_id=871852857&text=$post");

$data = json_decode($answer);

echo "<pre>";
print_r($data);
echo "</pre>";

