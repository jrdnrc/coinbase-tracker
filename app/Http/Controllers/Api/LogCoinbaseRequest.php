<?php declare(strict_types=1);

namespace JrdnRc\CoinbaseTracker\Laravel\Http\Controllers\Api;

use Illuminate\Contracts\Filesystem\Filesystem;
use JrdnRc\CoinbaseTracker\Laravel\Http\Requests\Api\LogCoinbaseNotification;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class LogCoinbaseRequest
 * @package JrdnRc\CoinbaseTracker\Laravel\Http\Controllers\Api
 * @author jrdn crocker <jrdn@jcrocker.uk>
 */
final class LogCoinbaseRequest
{
    /** @var Filesystem */
    private $filesystem;

    /**
     * @param Filesystem $filesystem
     */
    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
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

        $now = \Carbon\Carbon::now()->format('Y-m-d H:i:s');

        $this->filesystem->put("coinbase_notifications/{$now}.json", json_encode($data));

        return response()->json(['result' => 'accepted'], Response::HTTP_ACCEPTED);
    }
}