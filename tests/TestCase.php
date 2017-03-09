<?php

namespace JrdnRc\CoinbaseTracker\Tests;

abstract class TestCase extends \Laravel\BrowserKitTesting\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl;

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__ . '/../bootstrap/app.php';

        $app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();
        $this->baseUrl = config('app.url');

        return $app;
    }

    /**
     *
     */
    public function setUp()
    {
        parent::setUp();
    }
}