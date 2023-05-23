<?php

return [
    'bot_token' => env('TELEGRAM_BOT_TOKEN'),
    'default_chat_id' => env('TELEGRAM_DEFAULT_CHAT_ID'),
    'link' => 'https://api.telegram.org/bot' . env('TELEGRAM_BOT_TOKEN') . '/',
    'webhook_url' => env('TELEGRAM_WEBHOOK_URL'),
];