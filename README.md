# Package test OneStartup

  **onestartup/calculator** it's a simple calculator created for test laravel packages

# Installation

- Add this to composer.json file
```php
	"onestartup/calculator": "~0.0.2"
```
and  run 
```php
composer update
````

- after add the ServiceProvider to the providers array in config/app.php
```php
Onestartup\Calculator\CalculatorServiceProvider::class,
````
- run serv
```php
php artisan serve
```
- test in this route
```php
http://localhost:8000/add/5/2
```
