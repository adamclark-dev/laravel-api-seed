## Laravel API Seed

This is a laravel based API with authentication that intergrates roles and permissions.

This combines the following packages,

- [barryvadh/laravel-cors](https://github.com/barryvdh/laravel-cors) - Allow cross origin requests
- [Dingo/Api](https://github.com/dingo/api) - API responses
- [thephpleague/fractal](https://github.com/thephpleague/fractal) - Transformation Layer
- [tymondesigns/jwt-auth](https://github.com/tymondesigns/jwt-auth) - JSON Web Tokens (Authentication)
- [Zizaco/Entrust](https://github.com/Zizaco/entrust) - User Roles and Permissions

## Installation 

### Prerequisites

You need git to clone the laravel-api-seed repository.

The app uses php and composer, both must be installed for you to continue

### Clone the repository into your working directory

```bash
git --depth=1 clone https://github.com/adamclark-dev/laravel-api-seed.git .
```
### Setup the database

Create a mysql database. The go to the app/config/database.php and change the mysql database settings to reflect your setup.

### Create Database tables

```bash
php artisan migrate
```
## License

This package is licensed under the [BSD 3-Clause license](http://opensource.org/licenses/BSD-3-Clause).
