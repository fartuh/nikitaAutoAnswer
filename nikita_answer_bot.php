<?php

$token = "871852857:AAG5BPMscXpTAO3zMGZX6xzY_fy65a52GIk";

$comand = "sendMessage";

//$json = file_get_contents("php://input");
//$post = json_decode($json);
//$post = $post['message'];

$json = file_get_contents("php://input")

$answer = file_get_contents("https://api.telegram.org/bot$token/$comand?chat_id=850034955&text=$json");

$data = json_decode($answer);

echo "<pre>";
print_r($data);
echo "</pre>";

