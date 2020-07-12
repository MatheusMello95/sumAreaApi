# Server requirements:

* *PHP >= 7.2.5*
* *BCMath PHP Extension*
* *Ctype PHP Extension*
* *Fileinfo PHP extension*
* *JSON PHP Extension*
* *Mbstring PHP Extension*
* *OpenSSL PHP Extension*
* *PDO PHP Extension*
* *Tokenizer PHP Extension*
* *XML PHP Extension*

## Steps:
1. Create Database with name: 'homologacao' user: 'root' password: '' and run in port: 3306 (like .env)
    1. Rename .env.example file for .env
    2. Access .env file and in DB_DATABASE=laravel change for DB_DATABASE=homologacao
2. Run composer install
3. Run php artisan migrate
4. Run php artisan serve

## Routes:
### POST: localhost:8000/api/retangle

> Create a retangle

* params:
    * height: integer value
    * base: integer value


### POST: localhost:8000/api/triangle

> Create a triangle

* params:
    * side: integer value
    * base: integer value

### GET: localhost:8000/api/sumArea

> Return sum of areas.
