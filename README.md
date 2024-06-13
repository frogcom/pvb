
# ***instaleer project:***

voor het lokaal instaleren van dit project volg de volgende stappen 

## Installation local dev

Make sure the code is running on minimal PHP 8.2+

Make use of a local server (like MAMP, XAMPP or laragon)

Create a local database with the name to your choose

Copy `.env.example` and change to `.env`

Change the values of the `.env` to suite your own local dev:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

### Install local environment

Run the next commands in your terminal for installation




    Run composer install

    Run php artisan key:generate

    Run php artisan migrate

    Run php artisan db:seed

    Run php artisan serve

    Run npm install

    Run npm run dev


## Lokaal inlog gegevens

De inlog gegevens voor de user is:


    Email: test@example.com 
    Password: password


## live demo url: https://pvb.frogy.dev/
De inlog gegevens voor de online website is:


    Email: glu@example.nl
    Password: pvb2024!

