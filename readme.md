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

## Les principales difficultés
 - Toutes les opérations ne peuvent être faite en ligne sur https://dashboard.heroku.com/apps/, l'usage d'un client heroku-cli installé en local est quelquefois indispensable :(
 - HEROKU ne voit pas les variables d'environnement déclarées dans .env
   - Les variables d'environnement doivent être déclarées
     - soit sur le portail https://dashboard.heroku.com/apps/filrouge2quickstart/settings
     - soit via la ligne de commande : heroku config:set DATABASE_URL=postgres://username:password@machine:5432/database
     
 - 
