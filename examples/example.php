<?php

require __DIR__."/../vendor/autoload.php";

use TheCipherDetective\Telegram\Keyboards\InlineKeyboard;
use TheCipherDetective\Telegram\Keyboards\buttonStyle;

$InlineKeyboard = new InlineKeyboard();
$loginUrl = new InlineKeyboard();

$loginUrl->createUrlButton('agree','agree');
$login_button = ['url' => 'https://google.com' , 'bot_username' => '@bisto2_downloaderbot'];



$InlineKeyboard->addButton(['text' => 'My Link' , 'login_url' => $login_button, 'style' => "success"]);

echo json_encode([
    'inline_keyboard' => $InlineKeyboard->getButtons()]
);
