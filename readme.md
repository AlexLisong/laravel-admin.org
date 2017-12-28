laravel-admin.org
=================

Source code of official [http://laravel-admin.org](http://laravel-admin.org) website.

## Installation

```shell

$ git clone https://github.com/z-song/laravel-admin.org

$ cd laravel-admin.org

$ composer install -vvv

```

Then create a database with name `laravel_admin_demo` in your mysql. You can find database dump in `storage/mysql_dump/laravel_admin_demo.sql`,  import it:
```sql

mysql> create database `laravel_admin_demo`;

mysql> use `laravel_admin_demo`;

mysql> source storage/mysql_dump/laravel_admin_demo.sql

```

Back to terminal and start the web server:

```shell

如果访问demo 出错，删除composer.lock，重新composer install即可解决


$ php artisan serve

```

Finally open `http://localhost:8000/` in your browser.
