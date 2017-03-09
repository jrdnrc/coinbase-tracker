<?php declare(strict_types=1);

namespace JrdnRc\CoinbaseTracker\Tests\Api;

use Illuminate\Contracts\Filesystem\Filesystem;
use JrdnRc\CoinbaseTracker\Tests\ApiTestCase;

/**
 * Class CoinbaseNotificationTest
 * @package JrdnRc\CoinbaseTracker\Tests\Api
 * @author jrdn crocker <jrdn@jcrocker.uk>
 */
final class CoinbaseNotificationTest extends ApiTestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $data = ['foo' => 'bar'];

        $mock = $this->getMockBuilder(Filesystem::class)->getMock();
        $mock->expects($this->once())
            ->method('put')
            ->with(
                $this->stringStartsWith('coinbase_notifications/')
            );

        $this->app->instance(Filesystem::class, $mock);

        $response = $this->call('POST', '/', $data);
        file_put_contents(storage_path('response.html'), $response->content());
        $this->assertSame(202, $response->status());
    }
}