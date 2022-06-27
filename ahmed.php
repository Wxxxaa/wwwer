<?php

https://github.com/Wxxxaa/wwwer.git 



ob_start();
$API_KEY = "5335688486:AAEfOIFtscEgc3Bcl3Z3MdexRzmi67Ltl7M";
define('API_KEY','5335688486:AAEfOIFtscEgc3Bcl3Z3MdexRzmi67Ltl7M');
define('API_KEY','5335688486:AAEfOIFtscEgc3Bcl3Z3MdexRzmi67Ltl7M');
echo "https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME'];	

if($text == "هلو"){ 
$dev_i = array( 
"[  هلوات]($a)", 
"[ هلا والله ]($a)", 
"[ هلا حبي ]($a)", 
"[ هلاوات نورتنا]($a)", 
"[  لا هلا بيك😐💔]($a)", 
"[ هلا بلكمر 🌝]($a)", 
"[ هلا بلناقص😑]($a)",); 
$dev_a = array_rand($dev_i, 1); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'parse_mode'=>'MarkDown', 
'disable_web_page_preview'=>true, 
"text"=>$dev_i[$dev_a], 
'reply_to_message_id'=>$message->message_id 
]); 
}