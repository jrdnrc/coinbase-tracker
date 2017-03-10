<?php declare(strict_types=1);

namespace JrdnRc\CoinbaseTracker\Infrastructure\Data;

use Illuminate\Database\ConnectionInterface;

/**
 * Interface JsonDataStore
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
interface JsonDataStore extends ConnectionInterface
{
    /**
     * Begin a fluent query against a database table.
     *
     * @param  string $table
     * @return \Illuminate\Database\Query\Builder
     */
    public function collection($collection);
}