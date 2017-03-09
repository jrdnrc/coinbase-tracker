<?php declare(strict_types=1);

namespace JrdnRc\CoinbaseTracker\Tests;

/**
 * Class ApiTestCase
 * @package JrdnRc\CoinbaseTracker\Tests
 * @author jrdn crocker <jrdn@jcrocker.uk>
 */
abstract class ApiTestCase extends TestCase
{
    protected const POST_REQUEST    = 'POST';
    protected const GET_REQUEST     = 'GET';
    protected const PUT_REQUEST     = 'PUT';
    protected const DELETE_REQUEST  = 'DELETE';

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