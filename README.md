## BladeTwitterBootstrap ##

Expand Blade to generate Twitter Bootstrap code

### Installation ###

Add **BladeTwitterBootstrap** to your `composer.json` file to require :
```
require : {
    "laravel/framework": "~5.3",
    "michael-lurquin/laravel-bootstrap": "dev"
}
```

Update Composer :

```bash
composer update
```

The next required step is to add the service provider to `config/app.php` :

```php
BladeBootstrap\TwitterBootstrap\TwitterBootstrapServiceProvider::class,,
```

### Publish ###

The last required step is to publish views and assets in your application with :

```bash
php artisan vendor:publish
```

Congratulations, you have successfully installed **BladeTwitterBootstrap** !

### License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

### Documentation ###

## Syntax ##

You can set single or double quotation marks in Blade expressions

```php
@button("OK for Mr 'John Doe'", "primary")  // <button type='button' class='btn btn-primary'>OK for Mr 'John Doe'</button>
@button('Valid', 'success')                 // <button type='button' class='btn btn-success'>Valid</button>
@button(Cancel, 'danger')                   // <button type='button' class='btn btn-danger'>Cancel</button>
@button("OK")                               // <button type='button' class='btn btn-default'>OK</button>
```
