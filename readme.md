<h1>INSTALLATION DE LARAVEL</h1>

<b>/ Téléchargement de vagrant et de virtualBox

   - Création du dossier local : Laravel
   - Mise en place de la vagrant
   - installation des paquets nécéssaire à Laravel
   - installation de Laravel
   - modification des fichiers 000-default.conf et apache2.conf 
     permettant l'écriture et la lecture des dossiers Laravel


<h1>Mise en place de la base de données</h1>

   - Téléchargement de mysql workbench
   - Configuration du logiciel
   - Création de la base de données Laravel
   - Création des tables console_game , console, game_genre, games , genres


<h1> Creation de l'application STOCK@GAMES</h1>


/ Création du Controller IndexController
    
   - Stockage des données de la base de données dans les variables.
   - retourne à la vue accueil le chargement des données.
   - Lecteure possible de la base de données via les variables créeent
    
/ Création du dossier layouts 

   - Création du fichier base.blade.php  (model html)
   - Création du fichier menu.blade.php  (menu de l'application)
    
    
/Création des différentes vues accueil.blade.php, create.blade.php, update.blade.php

   - Mise place d'un visuel permettant d'exploiter l'application
   - Lecture de la base de données
   - Création, mise en forme des formulaires de création et update.
   - Insertion des boutons pour modifier ou supprimer un jeux
   
/Création et réfléxion sur le design

   - Stylisation du menu
   - Stylisation du tableau
   - Stylisation des boutons supression et modification
   - Stylisation des formulaires update et insertion
 
   
/Création des Controllers

   - Création des controllers CreateController, GameController(CRUD)
   - Mise place des functions nécéssaire au CRUD

/Création des fonctionnalités d'insertion, supression et mise à jour d'un jeux

   - création de la function Insert, delete, update dans le fichier GameController.php.
   
   
/Création des Models

   - Création des models Console, Game, Genre
   

/Ce que j'ai pas pu faire
    
   - Mettre en place un systeme d'insertion dynamique d'images.
   - Barre de recherche, et function search
   - Responsive design


   



<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](http://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Pulse Storm](http://www.pulsestorm.net/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
=======
# Projet Evaluation
>>>>>>> de2d4612dda96391e04a5df73e24a39f1bcaa991
