<?php declare(strict_types=1);

namespace JrdnRc\CoinbaseTracker\Laravel\Providers;

use Illuminate\Database\DatabaseManager;
use Illuminate\Support\ServiceProvider;
use JrdnRc\CoinbaseTracker\Infrastructure\Data\JsonDataStore;
use JrdnRc\CoinbaseTracker\Infrastructure\Data\MongoJsonDataStore;

/**
 * Class DataStoreProviders
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class DataStoreProviders extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(JsonDataStore::class, function () {
            return new MongoJsonDataStore(
                $this->app->make(DatabaseManager::class)->connection('mongo')
            );
        });
    }
}
