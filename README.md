# Laravel 11 輕鬆列舉處理

引入 emreyarligan 的 enum-concern 套件來擴增輕鬆列舉處理，目的在通過提供一套全面的方法來簡化列舉功能的使用，在集合的支援下，提供無縫且熟悉的使用體驗。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/fruits` 來進行水果隨機取得。

----

## 畫面截圖
![](https://i.imgur.com/J1zme0J.png)
> 最大的用途就是可以幫助我們提升程式的易讀性
