## Laravel Blade - TwitterBootstrap ##

Expand Blade to generate Twitter Bootstrap code

### Installation ###

Add **BladeTwitterBootstrap** to your `composer.json` file to require :
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
BladeBootstrap\TwitterBootstrap\TwitterBootstrapServiceProvider::class,
```

### Publish ###

The last required step is to publish views and assets in your application with :

```bash
php artisan vendor:publish
```

Congratulations, you have successfully installed **BladeTwitterBootstrap** !

### License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

## Documentation ##

### Syntax ###

| Directive Blade   |      Options      |  Optionnal                                       |
|-------------------|:------------------|:-------------------------------------------------|
| @glyph            | glyph             | NO                                               |
|                   | glyphiconType     | 'fontawesome'                                    |
| @button           | label             | YES                                              |
|                   | class             | YES : 'default'                                  |
|                   | glyph             | YES                                              |
|                   | array()           | List of attributes to add array('key' => 'value')|

### Examples ###

**Warning**, You should not put quotation marks in the Blade directive settings except in the array of attributes to add to the HTML Bootstrap elements

```php
@glyph(euro)                    // <span class='glyphicon glyphicon-euro' aria-hidden='true'></span>

@glyph(euro)
@glyph(filter, ['glyphiconType' => 'fontawesome'])

@button(One)
@button(Two, ['class' => 'danger'])
@button(Three, ['class' => 'primary', 'glyph' => 'search'])
@button(, ['class' => 'success', 'glyph' => 'heart'])
@button(Six, ['class' => 'info', 'glyph' => 'euro', 'id' => 'toto'])
```
