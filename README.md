# H34/Core-laravel

## Config

1. Edit config/auth.php file

Change user provider from App\Models\User to H34\Auth\Models\User

```php
'providers' => [
    'users' => [
        'driver' => 'eloquent',
        'model' => H34\Auth\Models\User::class
    ]
]
```
