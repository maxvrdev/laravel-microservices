<?php

namespace App\Providers;

use App\Jobs\ProductLiked;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        \App::bindMethod(ProductLiked::class. '@handle', fn($job) => $job->handle());
    }
}
