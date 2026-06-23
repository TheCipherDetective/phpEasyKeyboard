<?php

/**
 * Example: Automatic Row & Column Management
 * 
 * This example shows how phpEasyKeyboard automatically 
 * arranges buttons into rows based on maxColumns.
 */

require_once __DIR__ . '/../vendor/autoload.php';

use TheCipherDetective\PhpEasyKeyboard\Keyboards\InlineKeyboard;

// Create Inline Keyboard with 2 columns per row
$keyboard = new InlineKeyboard(2);   // or maxColumns: 2

// Add 10 callback buttons
for ($i = 1; $i <= 10; $i++) {
    $keyboard->createCallbackButton(
        "Button {$i}", 
        "callback_{$i}"
    );
}


$json = $keyboard->getInlineKeyboardAsJson();

echo "→ Result: 5 rows with 2 columns each\n\n";

echo $json . PHP_EOL;

// You can now send this to Telegram:
echo "\nUse this in your sendMessage / editMessageText request:\n";
echo '"reply_markup": ' . $json;