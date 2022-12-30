<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></p>

<h1 align="center">
     Simple Relational App
</h1>

## About Project

- Basic Laravel Auth: ability to log in as administrator
- Use database seeds to create first user with email `admin@admin.com` and password `“password”`
- CRUD functionality for Employees table only and use dummy data for Company Table.
- Companies DB table consists of these fields: Name (required), email, logo, website
- Employees DB table consists of these fields: First name (required), last name (required), Company (foreign key to Companies), email, phone, city, joining date
- Use Laravel’s validation function

## Useful Command For this App

```
php artisan migrate <!-- use for create DB tables -->
php artisan migrate:fresh --seed <!-- use for some random data-->

php artisan serve <!-- For run the app -->

```

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
