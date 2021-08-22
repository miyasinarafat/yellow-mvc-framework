# Yellow MVC Framework 
A Simple PHP MVC Framework with Simple blog.

![showcase](https://i.imgur.com/Cd8knMA.png)

## Installation
Clone the repository using command:

    git clone https://github.com/themeyellow/yellow-mvc-framework.git

    composer install

* For better performance try to use [Homestead](https://github.com/laravel/homestead).
* Add your database credentials in Database.php file (Src/Config/Database.php).
* Create posts table with this fields (title, slug, body, created_at, updated_at). If you wish then you could use SQL below.

`CREATE TABLE posts ( id int(11) NOT NULL, title varchar(191) COLLATE utf8_unicode_ci NOT NULL, slug varchar(191) COLLATE utf8_unicode_ci NOT NULL, body text COLLATE utf8_unicode_ci NOT NULL, created_at timestamp NULL DEFAULT NULL, updated_at timestamp NULL DEFAULT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
ALTER TABLE posts ADD PRIMARY KEY (id);
ALTER TABLE posts MODIFY id int(11) NOT NULL AUTO_INCREMENT;`


    
    
## Bugs and Features
If you have any bug or wish to request a feature, please open an [issue](https://github.com/themeyellow/yellow-mvc-framework/issues)

## Changelog
Please see [CHANGELOG](https://github.com/themeyellow/yellow-mvc-framework/CHANGELOG.md) for more information what has changed recently.

## Contributing
Contributions are always welcome!

## Credits
* [Arafat](https://github.com/themeyellow)
* [All Contributors](https://github.com/themeyellow/yellow-mvc-framework/graphs/contributors)

## Useful resources
* [Lumen-like routes](https://ollyxar.com/blog/lumen-like-routes "Lumen-like routes")
* [Create your own MVC framework in PHP](https://medium.com/@noufel.gouirhate/create-your-own-mvc-framework-in-php-af7bd1f0ca19 "Create your own MVC framework in PHP")
* [Using str_limit to restrict a string to a certain length](https://laravel-news.com/str_limit "Using str_limit to restrict a string to a certain length")

## License
The [MIT License (MIT)](https://github.com/mohd-isa/carbon/blob/master/LICENSE). Please see License File for more information.

