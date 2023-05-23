<?php

namespace Iqbalfarhan08\Telegramtools\Traits;

trait TelegramTrait
{
    public $chatId;
    public $parseMode;

    public function __construct()
    {
        $this->chatId = config('telegramtools.default_chat_id', '608751286');
        $this->parseMode = config('telegramtools.parse_mode', 'html');
    }

    public function setChatId($chat_id)
    {
        $this->chatId = $chat_id;
    }

    public function setParseMode($parse_mode)
    {
        $this->parseMode = $parse_mode;
    }

    public function sendMessage($message)
    {
        return $this->sendParsed('sendMessage', [
            'chat_id' => $this->chatId,
            'parse_mode' => $this->parseMode,
            'text' => $message
        ]);
    }

    public function sendPhoto($photo, $caption = null)
    {
        return $this->sendParsed('sendMessage', [
            'chat_id' => $this->chatId,
            'parse_mode' => $this->parseMode,
            'photo' => $photo,
            'caption' => $caption,
        ]);
    }

    public function sendParsed($method, $param = null)
    {
        if ($param == null) {
            $url = config('services.telegram.link') . $method;
        } else {
            $param = http_build_query($param);
            $url = config('services.telegram.link') . $method . "?" . $param;
        }

        return file_get_contents($url);
    }

    public function setWebhook($url = null)
    {
        $alamat = $url ?? config('telegramtools.webhook_url');
        $this->sendParsed('setWebhook', [
            'url' => $alamat,
            'drop_pending_updates' => true
        ]);

        return response()->json(['done' => true, 'webhookUrl' => $alamat], 201);
    }
}