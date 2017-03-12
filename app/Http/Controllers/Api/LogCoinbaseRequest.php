<?php declare(strict_types=1);

namespace JrdnRc\CoinbaseTracker\Laravel\Http\Controllers\Api;

use Illuminate\Contracts\Filesystem\Filesystem;
use JrdnRc\CoinbaseTracker\Infrastructure\Data\JsonDataStore;
use JrdnRc\CoinbaseTracker\Laravel\Http\Requests\Api\LogCoinbaseNotification;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class LogCoinbaseRequest
 * @package JrdnRc\CoinbaseTracker\Laravel\Http\Controllers\Api
 * @author jrdn crocker <jrdn@jcrocker.uk>
 */
final class LogCoinbaseRequest
{
    /** @var JsonDataStore */
    private $store;

    /**
     * LogCoinbaseRequest constructor.
     *
     * @param JsonDataStore $store
     */
    public function __construct(JsonDataStore $store)
    {
        $this->store = $store;
    }

    /**
     * @param LogCoinbaseNotification $request
     * @return Response
     */
    public function __invoke(LogCoinbaseNotification $request) : Response
    {
        $data = [
            'headers' => $request->headers->all(),
            'post'    => $request->request->all(),
            'get'     => $request->query->all(),
        ];

        // surround with array syntax to trick mongo into thinking
        // we are not inserting batches
        $this->store->collection('buys')->insert([$data]);

        return response()->json(['result' => 'accepted'], Response::HTTP_OK);
    }
}