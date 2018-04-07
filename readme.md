# BILAN
 - branche V4 : la connection à la BD est enfin opérationnelle
   - correction la plus pertinente : cp .env.travis .env (.env.testing n'est pas pris en charge par travis)







# DOCUMENTATION
## Introduction
Basé sur Laravel 5.2, testé avec PHP 7.0 en local.

## Installation en local

    navigateur> http://localhost/phpmyadmin
      créer une base de données FILR4LARAVEL

    console> cd /tmp
    
    console> git clone https://github.com/laravel/quickstart-basic quickstart

    console> cd quickstart
    
    console> cp .env.local .env
    
    console> vi .env
       indiquer le mot de passe de la base sur la variable d'environnement DB_PASSWORD
       
    console> composer install

    console> php artisan migrate

    console> php artisan serve
    
    navigateur> http://localhost:8000/

[Complete Tutorial](https://laravel.com/docs/5.2/quickstart)


# Installation en distant - HEROKU
