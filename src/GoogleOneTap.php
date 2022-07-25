<?php

namespace Steelze\GoogleOneTap;

use Google\Client as GoogleClient;

class GoogleOneTap
{
    public function getUserFromProvider()
    {
        $client = new GoogleClient(['client_id' => config('google-one-tap.client_id')]);
        return $client->verifyIdToken(request()->credential);
    }
}
