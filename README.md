# videoWebsite
### make by ITI Team students
<p> It is a website Displays Learning videos. <br>
The project was built by Laravel web Framework.
</p>
<p>
    Please read the .gitignore file to know what are files doesn't exist and download them if you want to run a project.
</p>

## To Run The Application

### 1.Make Clone 

```
git clone [Project-url]
```

### 2.Install Composer Dependencies

```
composer install
```

### 3.Install NPM Dependencies

```
npm install
```

### 4.Create a copy of your .env file

```
cp .env.example .env
```

### 5.Generate an app encryption key

```
php artisan key:generate
```

### 6.Create an empty database for our application

### 7.In the .env file, add database information to allow Laravel to connect to the database

<p>
    We will want to allow Laravel to connect to the database that you just created in the previous step. To do this, we must add the connection credentials in the .env file and Laravel will handle the connection from there.

In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created. This will allow us to run migrations and seed the database in the next step.
</p>

### 8.Migrate the database

```
php artisan migrate
```

### 9.[Optional]: Seed the database
```
php artisan db:seed
```
