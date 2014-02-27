#Laravel Framework

Mantené tu código simple y disfrutá programar.

!


#¿Por qué Laravel?

* Es PHP.
* Facil de aprender.
* Mucha Info.
* Gran comunidad.

!


#Características

* MVC
* Composer / Autoloads PSR0 , PSR4
* Basado en Simphony y otros paquetes.
* Linea de Comandos.
* Muy Elegante.
* Super Escalable.

!


#Demo

!


#1. Instalación

	Composer
	Laravel
	
	php artisan key:generate / 
	
	config/database.php
	
!
	

#2. Dependencias

	composer require --dev
	"way/generators": "1.1"
	"fzaninotto/faker": "1.4.*@dev"	
	"barryvdh/laravel-ide-helper": "dev-master"
	 
!
	 

#3. Generate Scaffold

	
	php artisan generate:scaffold Events --fields="title:varchar, descripcion:text, start:datetime, end:datetime, price:int"
	
!
	

#4. Seeding
	
	
	use Faker\Factory as Faker;
	use Carbon\Carbon;


!

#5. Paginator

	app/config/view.php
	'pagination' => 'pagination::slider',
	

!
	
#6. Autenticación

	php artisan generate:migration create_users_table --fields="email:string:unique, password:string"
	
	php artisan migrate
	
	php artsisan tinker
	> $user = new User;	
	> $user->password = Hash::make('1234');

!

#7. Auth.Basic


	Route::group(array('before'=>'auth.basic'), function() {
    	Route::resource('eventos', 'EventosController');
    });
