<?php declare(strict_types=1);

namespace JrdnRc\CoinbaseTracker\Infrastructure\Data;

use Illuminate\Database\ConnectionInterface;

/**
 * Interface JsonDataStore
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
interface JsonDataStore
{
    /**
     * Begin a fluent query against a database table.
     *
     * @param  string $table
     * @return \Jenssegers\Mongodb\Query\Builder
     */
    public function collection(string $collection) : \Jenssegers\Mongodb\Query\Builder;
}