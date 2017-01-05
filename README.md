## BladeTwitterBootstrap ##

### Installation ###

Add **BladeTwitterBootstrap** to your `composer.json` file to require :
```
require : {
    "laravel/framework": "~5.3",
    "michael-lurquin/laravel-bootstrap": "dev-master"
}
```

Update Composer :
```
    composer update
```

The next required step is to add the service provider to `config/app.php` :
```
    BladeBootstrap\TwitterBootstrap\TwitterBootstrapServiceProvider::class,,
```

### Publish ###

The last required step is to publish views and assets in your application with :
```
    php artisan vendor:publish
```

Congratulations, you have successfully installed **BladeTwitterBootstrap** !
