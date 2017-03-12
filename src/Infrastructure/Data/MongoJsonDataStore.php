<?php declare(strict_types=1);

namespace JrdnRc\CoinbaseTracker\Infrastructure\Data;

use Jenssegers\Mongodb\Connection;

/**
 * Class MongoJsonDataStore
 *
 * @author jrdn rc <jordan@jcrocker.uk>
 */
final class MongoJsonDataStore implements JsonDataStore
{
    /** @var Connection */
    private $connection;

    /**
     * MongoJsonDataStore constructor.
     *
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * Begin a fluent query against a database table.
     *
     * @param  string $table
     * @return \Jenssegers\Mongodb\Query\Builder
     */
    public function collection(string $collection): \Jenssegers\Mongodb\Query\Builder
    {
        return $this->connection->collection($collection);
    }
}