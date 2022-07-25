<?php

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
