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
php artisan vendor:publish --provider="Iqbalfarhan08\Telegramtools\TelegramToolServiceProvider" --tag="config --force"
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

### Mengatur setId

### Mengirim pesan text
