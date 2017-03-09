<?php declare(strict_types = 1);

namespace JrdnRc\CoinbaseTracker\Laravel\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Abstract Class Request
 * @package JrdnRc\CoinbaseTracker\Laravel\Http\Requests
 * @author jrdn crocker <jrdn@jcrocker.uk>
 */
abstract class Request extends FormRequest
{
    /**
     * @return string[]
     */
    abstract public function rules() : array;

    /**
     * @return bool
     */
    public function authorize() : bool
    {
        return true;
    }
}