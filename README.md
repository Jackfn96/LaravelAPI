<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About this Project

This project is a set of API endpoints enabling the following set of capabilities:

1. Registering/creating a new user.
2. Deleting a user.
3. Updating an existing user.
4. Listing all users.
5. Getting a list of handset types.

## How to Run

### Initial Setup
The project can be run following these 3 initial instructions for setup, then following the guide for the specific request mentioned after this section:

1. In a terminal whilst inside the project folder, run the command `php artisan serve` to start the application.
2. In another terminal again inside the project folder, then run the command `php artisan db:seed` to add the specified handset data to the database.
3. Open up an application to send HTTP requests e.g. Postman.

### Registering/creating a new user.


### Deleting a user.
1. In Postman, enter `http://127.0.0.1:8000/api/delete/<ENTER_USER_ID_HERE>` in the address bar, replacing <ENTER_USER_ID_HERE> with the id of the user you wish to remove.
2. Then ensure the request type is set to DELETE.
3. Click 'Send' to send the request.
4. A confirmation or error message will be displayed depending on whether the request was successful or not.

### Updating an existing user.
1. In Postman, enter `http://127.0.0.1:8000/api/update` in the address bar.
2. Then, ensure the request type is set to POST.
3. In the 'Body' tab, select 'raw' and 'JSON' data types.
4. In the empty request box, enter the following (replacing placeholders with the necessary information):
```
{
    "id": <ENTER_USER_ID_HERE>,
    "name": "<ENTER_NAME_HERE>",
    "email": "<ENTER_EMAIL_HERE>",
    "password": "<ENTER_NEW_PASSWORD_HERE>"
}
```

5. Click 'Send' to send the request.
6. A confirmation or error message will be displayed depending on whether the request was successful or not.

### Listing all users.
1. In Postman, enter `http://127.0.0.1:8000/api/users` in the address bar.
2. Then, ensure the request type is set to GET.
3. Click 'Send' to send the request.
4. A list of users and their related information is displayed.

### Getting a list of handset types.
1. In Postman, enter `http://127.0.0.1:8000/api/handsets` in the address bar.
2. Then, ensure the request type is set to GET.
3. Click 'Send' to send the request.
4. A list of handsets is displayed.
