<?php

$botToken = "186826205:AAHOKZwID7mVgsVpG5jovjBILqUMq82dWGs";
$website = "https://api.telegram.org/bot".$botToken ;

// $update = file_get_contents($website."/getupdates");

$update = file_get_contents("php://input");

//print_r($update);

//print_r($website."/getupdates");

$updateArray = json_decode($update, TRUE);

//print_r("testsite");


//$text = $updateArray["result"][0]["message"]["text"];

$chat_id = $updateArray["message"]["chat"]["id"];

//$chatId = $updateArray["result"][0]["message"]["chat"]["id"];

//print_r($chatId);

file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=testresponse");

//file_get_contents($website."/sendmessage?chat_id=251844043&text=testresponse");


//print_r($chatId);

?>
