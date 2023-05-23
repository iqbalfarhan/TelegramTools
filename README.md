# Simple telegram bot tools by iqbal

## Instalasi

Paket ini berisi fungsi sendMessage dan fungsi sendPhoto dari bot telegram

### Instalasi paket

Jalankan perintah berikut ini di terminal untuk menginstall package ini

```
composer require iqbalfarhan08/telegramtools
```

### Publish file config

Jalankan fungsi publish config seperti berikut ini di terminal kamu

```
php artisan vendor:publish --provider="Iqbalfarhan08\Telegramtools\TelegramToolServiceProvider"
```

### Configurasi environment

Tambahkan key ini di file .env untuk konfigurasi bot kamu;

```
TELEGRAM_BOT_TOKEN="TELEGRAM_BOT_kamu"
TELEGRAM_DEFAULT_CHAT_ID="CHAT_ID"
TELEGRAM_WEBHOOK_URL="WEBHOOK URL"
```

## Penggunaan

### Menggunakan package

Telegramtools ini adalah sebuah trait gunakan use TelegramTrait didalam class yang kamu buat

```
use Iqbalfarhan08\Telegramtools\Trait\TelegramTrait;

class YourController extends Controller
{
    use TelegramTrait
    ...
}
```

### Mengatur webhook

untuk mengatur webhook kamu bisa membuat route tersendiri baik di web.php atau di api.php.

```
// file api.php
Route::get('telegram/setWebhook', [API\TelegramController::class, 'setWebhook']);


// file API\TelegramController.php
use TelegramTrait;


// dengan url
public function setWebhook(){
    $url = "https://https://domain.com/api/telegram/";
    $this->setWebHook($url);
}


// atau tanpa url
public function setWebhook(){
    $this->setWebHook();
}

```

Kemudian akses route tersebut di https://domain.com/api/telegram/setWebhook.

Apabila tidak memasukkan $url wehbook akan diisi sesuai dengan value TELEGRAM_WEBHOOK_URL di file .env

### Mengatur Telegram Chat Id

Atur chat id sebelum mengirim pesan text atau pesan gambar. chat id bisa untuk perorangan atau group. chat id berupa angka dan bisa kamu dapatkan dari banyak bot ditelegram kemudian set chat id kamu dengan cara:

```
$this->setChatId("CHATID");
```

### Mengirim pesan text

Untuk mengirimkan pesan text kamu bisa menggunakan method sebagai berikut

```
$text = "hallo gais apkabs?";

$this->setChatId($chat_id);
return $this->sendMessage($text);
```

Parameter pertama sendMessage bersifat required (harus diisi) dan string.

### Mengirim pesan Photo

Untuk mengirimkan pesan berupa photo kamu bisa menggunakan method sebagai berikut

```
$photo = "https://cdn-icons-png.flaticon.com/512/282/282100.png";
$caption = "gambar link";

$this->setChatId($chat_id);
return $this->sendPhoto($photo, $caption);
```

Method sendPhoto memiliki 2 parameter yaitu:

- $photo : bersifat required (harus diisi) dan string.
- $caption : optional (tidak harus diisi) dan string.
