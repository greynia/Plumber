# Plumber
高等軟體工程 小組作業 水電工

### 環境安裝
* 下載 xampp
* 下載 composer
* 利用 composer去下載 Laravel的Framework([安裝教學](https://laravel.tw/docs/4.2))

### 修改環境
* 找到檔案 \xampp\apache\conf\httpd.conf
```java
#Virtual hosts
Include conf/extra/httpd-vhosts.conf
#將上面這行的註解拿掉
```
* 找到檔案 xampp\apache\conf\extra\httpd-vhosts.conf
```java
##<VirtualHost *:80>
    ##ServerAdmin webmaster@dummy-host.example.com
    DocumentRoot "C:/xampp/htdocs/Plumber/public"
    ##ServerName dummy-host.example.com
    ##ServerAlias www.dummy-host.example.com
    ##ErrorLog "logs/dummy-host.example.com-error.log"
    ##CustomLog "logs/dummy-host.example.com-access.log" common
##</VirtualHost>
#把Document更改成index.php存放的位置
```


需要修改Plumber底下的.env

```java
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=57575
DB_DATABASE=plumber
DB_USERNAME=root
DB_PASSWORD=greynia1130
```

將這邊改成自己的資料庫的設定檔自行進行測試


### 測試
利用 artisan 的指令進行測試(下php artisan serve指令可以啟動server)或者直接再xampp啟動測試
