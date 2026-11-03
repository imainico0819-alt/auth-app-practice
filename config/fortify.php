<?php

use Laravel\Fortify\Features;
use App\Providers\RouteServiceProvider;

return [
    'guard' => 'web',
    'passwords' => 'users',
    'username' => 'email',
    'email' => 'email',
    'lowercase_usernames' => true,
    'prefix' => '',
    'domain' => null,
    'middleware' => ['web'],
    'limiters' => [
        'login' => 'login',
        'two-factor' => 'two-factor',
    ],
    'views' => true,
    'features' => [
        Features::registration(),
        Features::resetPasswords(),
        // Features::emailVerification(),
        Features::updateProfileInformation(),
        Features::updatePasswords(),
        Features::twoFactorAuthentication([
            'confirm' => true,
            'confirmPassword' => true,
            // 'window' => 0,
        ]),
    ],
    'home' => RouteServiceProvider::HOME,
    'redirects' => [
        'login' => null,
        'logout' => '/login', // ログアウトした後に飛ばしたいURL
        'password-confirmation' => null,
        'register' => null,
    ],
];
