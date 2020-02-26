<?php

$token = "871852857:AAG5BPMscXpTAO3zMGZX6xzY_fy65a52GIk";

$comand = "sendMessage";

//$json = file_get_contents("php://input");
//$post = json_decode($json);
//$post = $post['message'];

$json = file_get_contents("php://input");

$data = json_decode($json);
if(isset($data->message->from->username) && $data->message->from->username != "")
    $msg = "username: " . $data->message->from->username . "; name: " . $data->message->from->first_name . "; text: " . $data->message->text;
else
$msg = "id: " . $data->message->from->id . "; name: " . $data->message->from->first_name . "; text: " . $data->message->text;

if(isset($data->message->text) && $data->message->text != '/start')
$answer = file_get_contents("https://api.telegram.org/bot$token/$comand?chat_id=719369702&text=$msg");


echo "<pre>";
print_r($data);
echo "</pre>";

