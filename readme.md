## Laravel PHP Framework
 # Run locally
 ```php artisan serve```

Followed everything as per https://devcenter.heroku.com/articles/getting-started-with-laravel


 - CSS/JS in public/css or public/js only, refer as <link href="css/..." rel=""> in blade template
 - configure routes in app/Http/routes.php
 - ```heroku run php artisan migrate``` for database migration for the php files in database/migrations followed by ```heroku run php artisan db:seed``` as per https://dev.to/jsafe00/deploy-laravel-application-with-database-to-heroku-l50