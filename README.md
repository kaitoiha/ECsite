# Laravel Sail起動
```
$ make up
```

# vite 起動
```
$ npm ci
$ npm run dev
```


## アクセス
http://localhost
## phpMyAdmin
http://localhost:8080/

## 設計書
https://docs.google.com/spreadsheets/d/1YIDqTKH2v2-n97kb2GNhWrcMGnJD84JMqTuzD_poMqo/edit?pli=1#gid=0

## ER図
https://drive.google.com/file/d/18sEk5LC-jJum-NU9JKNZibGRVX81aWE1/view?pli=1

## Stripe
Stripeが発行しているライブラリ 
https://github.com/stripe/stripe-php
```
composer require stripe/stripe-php 
```
.envにapiパスを追加してください。

## Stripeクレジットテスト
支払い成功
```
4242 4242 4242 4242
```
支払いには認証が必要です
```
4000 0025 0000 3155
```
支払いが拒否されました
```
4000 0000 0000 9995
```

## 開発手順
下記でgitからclone
```
git clone https://github.com/kaitoiha/ecsite.git
```

# インストール手順
```
cd ecsite
composer install
npm install
npm run dev
```
.env.exampleをコピーして.envファイルを作成
```
cp .env.example .env
```

# .envファイル下記項目を埋める
DB_CONNECTION
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

STRIPE_PUBLIC_KEY=""
STRIPE_SECRET_KEY=""

# dockerを起動した後、下記コマンドを実行
```
make up
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate:refresh --seed
```

画像のダミーデータは
public/imagesフォルダ内に
sample1.jpg 〜 sample6.jpgとして
保存しています。

./vendor/bin/sail artisan storage:linkで
storageフォルダにリンク後、

storage/app/public/productsフォルダ内に
保存すると表示されます。
(productsフォルダがない場合作成してください。)
```
cp public/images/* storage/app/public/products/
```

ショップの画像も表示する際、
storage/app/public/shopsフォルダを作成し
画像を保存してください。
```
cp public/images/sample2.jpg storage/app/public/shops/
cp public/images/sample3.jpg storage/app/public/shops/
```

# メールテスト
メールテストとしてmailtrapを利用しています。
必要な場合、.envにmailtrapの情報を追加してください。
https://mailtrap.io/

また、メール処理にはキューを使用しているため、下記コマンドの実行をしてください
```
./vendor/bin/sail artisan queue:work
```
