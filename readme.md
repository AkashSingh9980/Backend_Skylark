# Skylark Backend

A web application in PHP using Laravel framework, primarily for the reasons:

- /contact form should send data to database
- /services should load service list from database

Add to this list if you are working on additional features.



## Demo

Here is a working live demo [for development purposes] : https://backend-skylark.herokuapp.com



## Installation

This application currently includes Heroku-specific files. These steps ensure that you get the application running on your local system.

1. Install git from <https://git-scm.com/downloads>.
2. Install PHP (CLI) from <https://www.php.net/downloads> or follow the steps mentioned [here](https://linuxize.com/post/how-to-install-php-on-ubuntu-20-04/). Using Apache server is recommended.
3. Install Composer from <https://getcomposer.org/doc/00-intro.md#installation-windows> or follow the steps mentioned [here](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-20-04).
4. Setup Heroku on your system as stated [here](https://devcenter.heroku.com/articles/getting-started-with-php#set-up) , ensure everything works. 
5. ```git clone https://github.com/AkashSingh9980/Backend_Skylark``` in your preferred directory, to clone the current source code.



If you need to get a clone running on Heroku, follow [this](https://devcenter.heroku.com/articles/getting-started-with-laravel) additionally.



## Usage

1. ```cd``` into the project directory

2. Run 

   ```bash
   $ composer install
   ```

   or

   ```bash
   $ php composer.phar install
   ```

    to install dependencies in ```composer.json``` in your local environment

3. Check Heroku vars, copy into ```.env``` file for your local environment

4. To run application locally:

   ```bash
   $ php artisan serve
   ```

   

## Directory structure

Seems big, is standard for a Laravel / PHP project. This project follows [this](https://github.com/rappasoft/laravel-boilerplate) for boilerplate code.



## Development



### Adding a web page:

Let's assume you want to add an existing ```.html``` into this app:

- `something.html` goes as `something.blade.php` into ```resources/views```

- Blade files can use HTML code directly, along with additional Blade features.

- CSS, JS, fonts, images, img files go into ```public/css```, ```public/js```, `public/fonts`,`public/images` and `public/img` folders respectively. Use these like:  

  ```php+HTML
  <link href="css/..." rel="...">
  ```

  in `something.blade.php`.

- To get ```thissite.com/something``` to route to `something.blade.php`, configure route in ```app/Http/routes.php```. Check **Adding a route** to see how.



`contact.blade.php` uses the following snippet to check if `status` is set for current session, returned from `contactusController.php` (check **Adding a controller**):

```php+HTML
...
		@if(session('status'))
					<div class="inner_sec_info_wthree_agile">
						<h3>
							{{session('status')}}
						</h3>
					</div>
		@else
				<!-- display regular form -->
		@endif
...
```



`services.blade.php` uses the following snippet to iterate for each `$service` in `$services`:

```
...
		@foreach($services as $service)
				<!-- Use fields in $service as:
							{{$service->field_name}}
                		-->
		@endforeach
...
```



### Adding a route:

Routes are registered in ```app/Http/routes.php```, check existing Routes.

- *something.blade.php* needs to be setup as a GET request to `/something` which would render the blade file as a view, do as:

  ```php
  Route::get('something',function(){
      return view('something');
  })
  ```

  Use this for rendering regular pages, without dynamic content.

  

- To use a Controller-based GET callback, do as:

  ```php
  Route::get('services','servicesController@index');
  ```

  This calls the ```index()``` function of `servicesController.php` , present in `app/Http/Controllers`. 

  Use this for rendering non-form pages, which need dynamic content and don't send requests *(for eg. /services which simply loads items dynamically from database)*.

  

  *services.blade.php* view is returned in  `servicesController.php`, not in `routes.php` as like the other GET routes.

  Check **Adding a Controller** to know more.

  

- To use a Controller-based POST callback, do as:

  ```php
  Route::post('contact','contactusController@store');
  ```

  This calls the `store()` function of `contactusController.php`, present in `app/Http/Controllers`.

  Use this for sending POST request to `/contact`, as a global `$request` variable, used in `contactusController.php`.  *(for eg. /contact which sends form data from contact.blade.php to database*

  

  `/contact` additionally needs a GET call to render *contact.blade.php* as a view, do as stated in first point.



### Database:

For development purposes, Heroku's free POSTGreSQL is used. 

Access using Heroku CLI:

```sh
$ heroku pg:psql postgresql-curly-18163 --app backend-skylark
```



##### - Database configuration

Present in `config/database.php`

- `$url` parses the `DATABASE_URL` value in your local `.env` file / Heroku config vars

- This line:

  ```php
  'default'=>env('DB_CONNECTION','pgsql'),
  ```

  will use `DB_CONNECTION` (if present in `.env`), or fallback to pgsql as default. Current `.env` / Heroku config vars do not include a `DB_CONNECTION`, so pgsql is established in all cases.

- pgsql is configured currently as:

  ```php
  'pgsql' => [
              'driver'   => 'pgsql',
              'host'     => $url["host"],
              'port'     =>$url["port"],
              'database' => ltrim($url["path"],"/"),
              'username' => $url["user"],
              'password' => $url["pass"],
              'charset'  => 'utf8',
              'prefix'   => '',
              'prefix_indexes' => true,
              'schema'   => 'public',
              'sslmode'  => 'prefer'
          ]
  ```

  The corresponding variables are extracted automatically from `$url`.



##### - Making a database migration

​	(Essentially results in a table being formed)

- ​	To make a new migration:

  ```bash
  $ php artisan make:migration create_users_table
  ```

- Edit the newly created file in `database/migration` , specify table schema like:

  ```php
  <?php
  
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Database\Migrations\Migration;
  
  class Services extends Migration
  {
      public function up()
      {
          //the following is only an example, please refer Migrations documentation for 			full info on datatypes
          Schema::create('<<name of table>>',function(Blueprint $table){
              $table->increments('<<primary key field>>');
              $table->text('<<text field>>');
              $table->string('<<string field>>');
              
          });
      }
  }
  ```

  Refer Laravel documentation for Migrations [here](https://laravel.com/docs/7.x/migrations).

- Run the following on local / ```heroku run```:

  ```bash
  $ php artisan migrate
  ```

  ```bash
  $ php artisan db:seed
  ```

- Check created table in db:

  ```bash
  $ heroku pg:psql postgresql-curly-18163 --app backend-skylark
  ```

  ```
  backend-skylark::DATABASE=> \dt;
  ```

  ```sql
  backend-skylark::DATABASE=> SELECT * from <<name of table>>
  ```

  

Reference taken from [here](https://dev.to/jsafe00/deploy-laravel-application-with-database-to-heroku-l50).





### Adding a Controller:

Currently, 2 Controllers are set up in `app/Http/Controllers/`:

- `contactusController.php`: sends data from global value `$request` to database, returning a redirect to `contact` view with `status` set to 'Thank You!'. 

  

  ```php
  public function store(Request $request)
      {
          //Validate the request
          //request variables are the ```name``` of the fields in blade 
           $contact = new contactus;
           $contact->name=$request->visitor_name;
           $contact->email=$request->visitor_email;
           $contact->subject=$request->visitor_subject;
           $contact->message=$request->visitor_message;
           $contact->save();
           return redirect('contact')->with('status','Thank You!');
      }
  ```

   

------



 - send POST request to url contactus in routes.php, which routes it to contactusController.php. cuC.php uses contactus.php for model initialisation, and takes parameters from global value $request, and save() inserts to pgsql db as defined by .env and config/database.php
 - to do dynamic stuff, make controller using ```php artisan make:controller <<name>>```, edit that in app/Http/Controllers/<<name>>.php