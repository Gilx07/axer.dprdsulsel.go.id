<?php
// Replace YOUR_BOT_TOKEN with your actual bot token.
$bot_token = '6129641454:AAFDsfpAJAJ8B1lkc4ph2xe-MbNJyXwxUyQ';

// Send a message to the bot.
$url = 'https://api.telegram.org/bot' . $bot_token . '/getUpdates';
$response = file_get_contents($url);

// Extract the chat ID from the response.
$data = json_decode($response, true);
$chat_id = $data['result'][0]['message']['chat']['id'];

// Display the chat ID.
echo 'Your chat ID is: ' . $chat_id;
?>
