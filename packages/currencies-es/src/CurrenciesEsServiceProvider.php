<?php

namespace Squire;

use Illuminate\Support\ServiceProvider;
use Squire\Models\Currency;

class CurrenciesEsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Repository::registerSource(Currency::class, 'es', __DIR__ . '/../resources/data.csv');
    }
}
