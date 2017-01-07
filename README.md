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

| Name | Options | Optionnal | Extras |
|------|---------|-----------|--------|
| glyph | icon | NO | |
| button | label | NO | |
| | class | YES : 'default' | |
| | attributes | YES : array(key => value) | |
| alert | message | NO | |
| | title | YES | |
| | class | YES = 'danger' | |
| | glyph | YES | |
| | close | YES : 'TRUE' | |
| dropdown | label | NO | |
| | links | YES : array(url => label) | |
| | id | YES : 'dropdownMenu1' | array('divider', 'dropdown-header', 'disabled', 'active') |
| | openBottom | YES : TRUE | |
| buttonToolbar | buttons | NO | array(url => label) |
| | classActive | YES : 'primary' | |
| | classNotActive | YES : 'default' | |
| | ariaLabel | YES | |

### Examples ###

List of commands with the minimum number of parameters and which increases progressively.

```html
{!! Bootstrap::glyph('star') !!} // <span class='glyphicon glyphicon-star' aria-hidden='true'></span>

{!! Bootstrap::button('Je suis un bouton') !!}
{!! Bootstrap::button('Je suis un bouton', 'primary') !!}
{!! Bootstrap::button('Je suis un bouton', 'primary', ['id' => 'btnOk']) !!}
{!! Bootstrap::button('Je suis un bouton', 'primary', ['id' => 'btnOk', 'glyph' => 'globe']) !!}

{!! Bootstrap::alert('Enter a valid email address', 'Error', 'danger', 'star', FALSE) !!}

{!! Bootstrap::dropdown('Dropdown', ['dropdown-header' => 'Header', '/home' => 'Home', 'divider' => '', 'active' => 'About'], 'primary', 'dropdownMenu1', FALSE) !!}

{!! Bootstrap::buttonToolbar(['/home' => 'Left', 'active' => 'Middle', '/about' => 'Right'], 'danger', 'default') !!}
```
