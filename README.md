<p align="center">
    <a href="https://filamentadmin.com/docs/2.x/admin/installation">
        <img alt="FILAMENT 8.x" src="https://img.shields.io/badge/FILAMENT-2.x-EBB304?style=for-the-badge">
    </a>
    <a href="https://packagist.org/packages/andrewdwallo/filament-companies">
        <img alt="Packagist" src="https://img.shields.io/packagist/v/andrewdwallo/filament-companies.svg?style=for-the-badge&logo=packagist">
    </a>
    <a href="https://packagist.org/packages/andrewdwallo/filament-companies">
        <img alt="Downloads" src="https://img.shields.io/github/downloads/andrewdwallo/filament-companies/total?style=for-the-badge" >
    </a>
</p>

<hr style="background-color: #ebb304">

# Filament Companies

A Complete Authentication System Kit based on Companies:
- :fire: **Authentication - Laravel Fortify** 
- :fire: **Registration** 
- :fire: **Login** 
- :fire: **Terms of Service**
- :fire: **Privacy Policy**
- :fire: **Password Reset - Email**
- :fire: **Personal Profile Management**
- :fire: **Two-Factor Authentication (2FA)**
- :fire: **Browser Session Management**
- :fire: **API - Laravel Sanctum**
- :fire: **Company Management**
- :fire: **Complete Separation of Company Contexts**
- :fire: **Employee Invitation to Company - Email**
- :fire: **Roles & Permissions**
- :fire: **And More to Come!**

# Screenshots
![Registration](https://user-images.githubusercontent.com/104294090/210308649-6b5ad244-4d8a-4359-adbe-dbcbd131ab19.png)
![Login](https://user-images.githubusercontent.com/104294090/210308646-411bbbd1-cc8a-434b-8545-567e784c107b.png)
![Forgot Password](https://user-images.githubusercontent.com/104294090/210308645-ad800d02-7259-4a24-aee4-978b36614428.png)
![Terms of Service](https://user-images.githubusercontent.com/104294090/210308650-fe2e39a8-b77d-4e02-b106-5b8f855a7a5f.png)
![Privacy Policy](https://user-images.githubusercontent.com/104294090/210308648-9d3b3876-c59b-47be-9fd3-666f8496d279.png)
![Company Dropdown](https://user-images.githubusercontent.com/104294090/210308642-52aa9631-0d61-4a6f-a414-cf04ee2a884b.png)
![Company Settings](https://user-images.githubusercontent.com/104294090/210308643-2505b7e4-8878-47bf-82c2-00f394cd4efc.png)
![User Profile](https://user-images.githubusercontent.com/104294090/210308651-ee2dabd6-42e4-4729-b5b3-ea1c8cc626a1.png)
![2FA](https://user-images.githubusercontent.com/104294090/210308631-3e5d69e7-ead2-4625-b5f0-f92954b09b19.png)
![API Tokens](https://user-images.githubusercontent.com/104294090/210308640-e2dd9aac-ea08-4281-848e-290c363aab5d.png)
![New Company](https://user-images.githubusercontent.com/104294090/210308647-c2a37825-5bfa-4c1d-8c89-bc592da9464c.png)
![Screenshot_20230103_051858](https://user-images.githubusercontent.com/104294090/210339884-62da2a4c-97cd-4711-b2f3-5e04a72c4a68.png)



## Getting Started

### Installing

* This plugin requires a fresh Filament project
* If you install this plugin into an existing Filament project you will get errors
* Do not install this plugin into an existing Filament project
* No modifications need to be made to the filament config files
* Everything is set once the plugin is installed

### Executing program

* Create a fresh Laravel Project
* Configure your database
* Install the filament admin package

```
composer require filament/filament
```

* Install the package
```
composer require andrewdwallo/filament-companies
```

* Now use the following command to scaffold the app.
```
php artisan filament-companies:install filament --companies
```

* After Scaffolding is complete run the following commands. (Use either npm, pnpm, or yarn depending on what your package manager currently is before the scaffold)
```
npm install
```
```
npm run build
```
```
php artisan migrate:fresh
```
```
npm run dev
```

* Go to the Register page by clicking Register in the top right corner of the Laravel Welcome page.
* You will be redirected to the admin panel.
* You can create companies by clicking the dropdown navigation in the Filament topbar.
* By clicking on your current company's settings in the topbar you can manage that current company.
* You may also switch your current company.
* You can also create API Tokens and manage your personal profile settings by clicking the filament user menu dropdown link.

* You may publish the components and customize them to your liking.
```
php artisan vendor:publish --tag=filament-companies-views
```

### Usage
This package is extensively "borrowed" from the work of Taylor Otwell, his contributors and the Laravel Jetstream package. You can get a full understanding of the capabilities by reviewing the Jetstream docs:
https://jetstream.laravel.com/2.x/introduction.html

* If you want to change the filament path prefix to something such as "company", you may do so as you normally would in the filament.php config file:
```
/*
    |--------------------------------------------------------------------------
    | Filament Path
    |--------------------------------------------------------------------------
    |
    | The default is `admin` but you can change it to whatever works best and
    | doesn't conflict with the routing in your application.
    |
    */

    'path' => env('FILAMENT_PATH', 'company'),
```
- The Laravel Welcome Page, Fortify, etc.. will respect your changes.

### Note
* Documentation specific to Filament will come as more modifications are made.
* This package is supposed to be a Filament Context and is planning to be used as one in Filament V3
* This is not supposed to be the "Admin" Context, this would be the view that a "company user" would see (although there are methods to support an admin context)

### Contributing
* Fork this repository to your GitHub account.
* Create a fresh Laravel & Filament Project
* Clone your fork in your Laravel/Filament app's root directory.
* In the `/filament-companies` directory, create a branch for your fix, e.g. `fix/error-message`.

Install the plugin/package in your app's `composer.json`:

```json
{
    ...
    "require": {
        "andrewdwallo/filament-companies": "*",
    },
    "repositories": [
        {
            "type": "path",
            "url": "filament-companies/"
        }
    ],
    ...
}
```

* Now, run `composer update`.
* Now use the following command to scaffold the app.
```
php artisan filament-companies:install filament --companies
```
* Now follow instructions above.

### For Contributors:

#### A general list of things that need to be worked on/improved:

* Dark Mode support for some components
* NavigationMenu.php class component listener needs to actually refresh after a form is saved (This is connected to a render hook in FilamentCompaniesServiceProvider)
* Test need to be updated
* Any other things you notice that you would like to improve that would benefit everyone as a whole
