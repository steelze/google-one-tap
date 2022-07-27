# Google One Tap Login

[![Latest Version on Packagist](https://img.shields.io/packagist/v/steelze/google-one-tap.svg?style=flat-square)](https://packagist.org/packages/steelze/google-one-tap)
[![Total Downloads](https://img.shields.io/packagist/dt/steelze/google-one-tap.svg?style=flat-square)](https://packagist.org/packages/steelze/google-one-tap)
![GitHub Actions](https://github.com/steelze/google-one-tap/actions/workflows/main.yml/badge.svg)

This package integrates Google's one tap login into a laravel project.

## Installation

You can install the package via composer:

```bash
composer require steelze/google-one-tap
```

The service provider will automatically be registered.

Next, you must publish the config file:

```bash
php artisan vendor:publish --tag=google-one-tap
```

This is the contents of the default configuration file. Here you can modify configurations .

```php
return [

    /*
    |--------------------------------------------------------------------------
    | Google Client ID
    |--------------------------------------------------------------------------
    |
    | This value is your Google app's client ID, which is found
    | and created in the Google Developers Console.
    |
    */

    'client_id' => env('GOOGLE_CLIENT_ID'),

    /*
    |--------------------------------------------------------------------------
    | Enable Google One Tap
    |--------------------------------------------------------------------------
    |
    | This determines whether to display One tap or not. The default value is
    | true. Google One tap will not be displayed when this value is false
    |
    */

    'enable' => (bool) env('ENABLE_GOOGLE_ONE_TAP', true),

    /*
    |--------------------------------------------------------------------------
    | Login URI
    |--------------------------------------------------------------------------
    |
    | This specifies the the URI of your login endpoint. The ID token credential
    | response is posted to this endpoint when no callback function is defined
    | and a user clicks on the One Tap buttons, or automatic sign takes place.
    |
    */

    'login_uri' => '',

    /*
    |--------------------------------------------------------------------------
    | Cancel on Outside Click
    |--------------------------------------------------------------------------
    |
    | This attribute sets whether or not to cancel the One Tap request if the
    | user clicks outside of the prompt. The default value is true. To disable it,
    | set the value to false.
    |
    */

    'cancel_on_tap_outside' => false,

    /*
    |--------------------------------------------------------------------------
    | Context
    |--------------------------------------------------------------------------
    |
    | Changes the text of the title and messages shown in the One Tap prompt
    | Supported: "use", "signin", "signup"
    |
    */

    'context' => 'use',

    /*
    |--------------------------------------------------------------------------
    | itp_support
    |--------------------------------------------------------------------------
    |
    | This field determines if the upgraded One Tap UX should be enabled on
    | browsers that support Intelligent Tracking Prevention (ITP).
    | The default value is false. See the following for further
    | information: https://developers.google.com/identity/gsi/web/guides/features#upgraded_ux_on_itp_browsers
    |
    */

    'itp_support' => false,

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | Custom data attributes, which are sent to your login endpoint with the
    | ID token retrieved from Google.
    |
    */
    'custom' => [

    ]
];
```
## Usage
Update the login uri in the config file. The specified uri will be called by google and the credential is posted to this endpoint

```php
/*
|--------------------------------------------------------------------------
| Login URI
|--------------------------------------------------------------------------
|
| This specifies the the URI of your login endpoint. The ID token credential
| response is posted to this endpoint when no callback function is defined
| and a user clicks on the One Tap buttons, or automatic sign takes place.
|
*/

'login_uri' => '',
```

Within the route callback handler, call the `GoogleOneTapFacade::getUserFromProvider()` method. This method will return an array of the logged in user details or throw an exception if an error occured.

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email sogungbure@gmail.com instead of using the issue tracker.

## Credits

-   [Odunayo Ogungbure](https://github.com/steelze)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
