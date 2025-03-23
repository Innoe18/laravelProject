## Laravel 8 Complete Blog

•	Author: Code With Innoe <br>

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>
## Framework 
Built using Laravel with Blade as the templating engine.
Routes are defined using resource routes and custom GET/POST routes.
## Styling & Design
Tailwind CSS is used for styling.
Font Awesome icons  are used to enhance the visual appeal.
## About this blog
This project is a Laravel-based blog that focuses on F1 Academy and celebrates female racers with a fun, pastel, and "girly racing" aesthetic.
Its main aim is to bring attention to the least noticed group of motosport athletes which is female racers. 
I hope to inspire more people to do the same. 
## Features of the blog 
• Allows users to register their accounts and login when they come to the blog 
• Guest users can read blog articles and view helmets of the week 
• Logged in users can also add a blog post , edit their blog posts and delete their blog posts and like blog posts that they didnt post  
• Logged in users can also vote for helmet that they like so that it can win helmet of the week and it is displayed on the home page 
• Admin user can add, delete and edit helmets 
• The blog post with the most like is displayed in the home page next to the helmet with the most votes 
• Users can search for a blog . They just enter the word that is contained in the post that they are looking for. 
## Project Timeline 
Started from 
## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone https://github.com/Innoe18/laravelProject.git
cd laravel-8-complete-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```
## Before starting <br>
Create a database <br>
```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
```

## Contributing
Do not hesitate to contribute to the project by adapting or adding features ! Bug reports or pull requests are welcome.
