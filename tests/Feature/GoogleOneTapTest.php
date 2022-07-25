<?php

namespace Steelze\GoogleOneTap\Tests\Feature;

use Steelze\GoogleOneTap\Tests\TestCase;
use Illuminate\Support\Facades\Config;

class GoogleOneTapTest extends TestCase
{
    public function test_one_tap_blade_can_be_rendered()
    {
        Config::set('google-one-tap.client_id', 'CLIENT_ID');
        Config::set('google-one-tap.login_uri', 'LOGIN_URI');

        $view = $this->view('google-one-tap::prompt');

        $view->assertSee('id="g_id_onload"', false);
        $view->assertSee('client_id');
        $view->assertSee('login_uri');
    }

    public function test_one_tap_script_blade_directive_contains_src()
    {
        $view = (string) $this->blade('@googleClientScript');

        $this->assertStringContainsString('src="https://accounts.google.com/gsi/client"', $view);
    }
}
