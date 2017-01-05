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
BladeBootstrap\TwitterBootstrap\TwitterBootstrapServiceProvider::class,
```

### Publish ###

The last required step is to publish views and assets in your application with :

```bash
php artisan vendor:publish
```

### Configuration ###

A configuration is possible to change the default values of parameters passed to Blade directives

```php
return [
    'bootstrap-version' => '3.3.7',
    'default_values' => [
        'button' => [
            'label' => '',
            'class' => 'default',
            'glyph' => '',
        ],
    ],
];
```

Congratulations, you have successfully installed **BladeTwitterBootstrap** !

### License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

## Documentation ##

### Syntax ###

| Directive Blade   |      Options      |  Optionnal      |
|-------------------|:------------------|:----------------|
| @glyph            | glyph             | NO              |
| @button           | label             | YES :           |
|                   | class             | YES : 'default' |
|                   | glyph             | YES :           |

### Examples ###

You can set single or double quotation marks in Blade expressions

```php
@glyph(euro)                    // <span class='glyphicon glyphicon-euro' aria-hidden='true'></span>

@button('One')                  // <button type='button' class='btn btn-default'>One</button>
@button("Two", danger)          // <button type='button' class='btn btn-danger'>Two</button>
@button(Three, success, star)   // <button type='button' class='btn btn-success'><span class='glyphicon glyphicon-star' aria-hidden='true'></span> Three</button>
@button(, primary, search)      // <button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-search' aria-hidden='true'></span></button>
```
