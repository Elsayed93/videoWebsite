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
git clone https://github.com/Elsayed93/videoWebsite.git
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
---
## Screen shots from project.

![latest-videos](https://user-images.githubusercontent.com/66916174/102794734-74f01f00-43b4-11eb-97b3-a2dd011caa9d.jpg)

---

![video2](https://user-images.githubusercontent.com/66916174/102794899-b08ae900-43b4-11eb-9293-611994573b71.jpg)

---

### WE HOPE A NICE DAY FOR YOU 
### ENJOY
### THANK YOU
### ITI STUDENT TEAM
