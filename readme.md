## Laravel PHP Framework
 # Run locally
 ```php artisan serve```

Followed everything as per https://devcenter.heroku.com/articles/getting-started-with-laravel
https://github.com/rappasoft/laravel-boilerplate for boilerplate code

 - CSS/JS in public/css or public/js only, refer as <link href="css/..." rel=""> in blade template
 - configure routes in app/Http/routes.php
 - ```php artisan make:migration create_users_table``` to make a migration from artisan, edit file in database/migration, push to github, deploy to heroku, ```heroku run php artisan migrate``` for database migration for the php files in database/migrations followed by ```heroku run php artisan db:seed``` as per https://dev.to/jsafe00/deploy-laravel-application-with-database-to-heroku-l50
 - send POST request to url contactus in routes.php, which routes it to contactusController.php. cuC.php uses contactus.php for model initialisation, and takes parameters from global value $request, and save() inserts to pgsql db as defined by .env and config/database.php
 - Access db using ```heroku pg:psql postgresql-curly-18163 --app backend-skylark```
 - to do dynamic stuff, make controller using ```php artisan make:controller <<name>>```, edit that in app/Http/Controllers/<<name>>.php