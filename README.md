## Laravel - Bootstrap ##

Generate Twitter Bootstrap code

### Installation ###

Add **LaravelBootstrap** to your `composer.json` file to require :
```
require : {
    "laravel/framework": "5.3.*",
    "michael-lurquin/laravel-bootstrap": "dev"
}
```

Update Composer :

```bash
composer update
```

The next required step is to add the service provider to `config/app.php` :

```php
Lurquinm\LaravelBootstrap\LaravelBootstrapServiceProvider::class,
```

### Publish ###

The last required step is to publish views and assets in your application with :

```bash
php artisan vendor:publish
```

Congratulations, you have successfully installed **LaravelBootstrap** !

### License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

## Documentation ##

### Syntax ###

| Name | Options | Optionnal |
|------|---------|-----------|
| glyph | icon | NO |
| button | label | NO |
| | class | YES : 'default' |
| | attributes | YES : array(key => value) |

### Examples ###

```html
{!! Bootstrap::glyph('star') !!} // <span class='glyphicon glyphicon-star' aria-hidden='true'></span>

{!! Bootstrap::button('Je suis un bouton') !!}
{!! Bootstrap::button('Je suis un bouton', 'primary') !!}
{!! Bootstrap::button('Je suis un bouton', 'primary', ['id' => 'btnOk']) !!}
{!! Bootstrap::button('Je suis un bouton', 'primary', ['id' => 'btnOk', 'glyph' => 'globe']) !!}
```
