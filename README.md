
![Logo](https://media.suara.com/pictures/653x366/2022/04/12/90022-ilustrasi-anya-forgerimdbcom.jpg)


## Tutorial

Buat folder "mysql"



Di dalam folder src  ".env.example" ubah menjadi ".env"

## Install composer 
masuk kedalam aplikasi laravel kalian di dalam aplikasi laravel ketikan perintah berikut :
```bash
  composer install
```
## Sinkron database

```bash
  docker-compose exec php php /var/www/html/artisan migrate
```
atau
```bash
  docker-compose exec php php /var/www/html/artisan migrate:fresh --seed
```
