<?php 
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "8086237551:AAHeTBb1jkKGqGTE9dZreXQGIxkGPuH-qt4";
$chat_id = "-4563960374";

$formData = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone
);

foreach($formData as $key => $value){
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}

echo "Привет, " . $user_name . "<br>";
echo "Ваш телефон: <b>" . $user_phone . "</b>";