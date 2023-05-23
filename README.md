# Simple telegram bot tools by iqbal

## Instalasi

paket ini berisi fungsi sendMessage dan fungsi sendPhoto dari bot telegram

### Instalasi paket

Jalankan perintah berikut ini di terminal untuk menginstall package ini

```
composer require iqbalfarhan08/telegramtools
```

### Publish file config

Jalankan fungsi publish config seperti berikut ini di terminal anda

```
php artisan vendor:publish --provider="Iqbalfarhan08\Telegramtools\TelegramToolServiceProvider" --tag="telegramtool_config" --force
```

### Configurasi environtment

Tambahkan key ini di file .env untuk konfigurasi bot anda;

```
TELEGRAM_BOT_TOKEN="TELEGRAM_BOT_ANDA"
TELEGRAM_DEFAULT_CHAT_ID="CHAT_ID"
TELEGRAM_WEBHOOK_URL="WEBHOOK URL"
```

## Penggunaan

### Menggunakan package

telegramtools ini adalah sebuah trait gunakan use TelegramTrait didalam class yang anda buat

```
use Iqbalfarhan08\Telegramtools\Trait\TelegramTrait;

class YourController extends Controller
{
    use TelegramTrait
    ...
}
```

### Mengatur webhook

```
$
```

### Mengatur Telegram Chat Id

atur chat id sebelum mengirim pesan text atau pesan gambar. chat id bisa untuk perorangan atau group. chat id berupa angka dan bisa anda dapatkan dari banyak bot ditelegram kemudian set chat id anda dengan cara:

```
$this->setChatId("chat id anda")
```

### Mengirim pesan text
