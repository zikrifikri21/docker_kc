# Tutorial

*** Bikin folder "mysql"
    Di dalam folder src  ".env.example" ubah menjadi ".env"
    Install composer
        composer instal

1. Jalankan docker dengan perintah brikut
        docker compose up --build
        docker-compose up -d
            Menghentikan progres docker
                docker compose down
    Jalankan perintah berikun untuk menyinkron database
        - docker-compose exec php php /var/www/html/artisan migrate:fresh --seed

2. buka di browser [[localhost:8000](http://localhost:8000/)] untuk menjalankan aplikasi
    login aplikasi
        email: iniakunku@329@gmail.com
        password: 111111
3. buka di browser [[localhost:8081](http://localhost:8081/)] untuk menjalankan phpmyadmin
    login phpmyadmin
        username:homestead
        password:secret
