<?php declare(strict_types=1);

namespace JrdnRc\CoinbaseTracker\Laravel\Http\Requests\Api;

use JrdnRc\CoinbaseTracker\Laravel\Http\Requests\Request;

/**
 * Class LogCoinbaseNotification
 * @package JrdnRc\CoinbaseTracker\Laravel\Http\Requests\Api
 * @author jrdn crocker <jrdn@jcrocker.uk>
 */
final class LogCoinbaseNotification extends Request
{

    /**
     * @return string[]
     */
    public function rules() : array
    {
        // No rules yet
        return [];
    }
}