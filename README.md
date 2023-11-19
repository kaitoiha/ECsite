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


## 開発手順
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
