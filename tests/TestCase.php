<?php

namespace Steelze\GoogleOneTap\Tests;

use Steelze\GoogleOneTap\GoogleOneTapServiceProvider;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    use InteractsWithViews;

    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            GoogleOneTapServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {

    }
}
