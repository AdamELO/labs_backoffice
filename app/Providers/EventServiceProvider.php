<?php

namespace App\Providers;

use App\Events\ArticlePublierEvent;
use App\Events\UserRegisterNewsletterEvent;
use App\Events\WelcomeEvent;
use App\Listeners\ArticlePublierListener;
use App\Listeners\UserRegisterNewsletterListener;
use App\Listeners\WelcomeListener;
use App\Mail\WelcomeNewsletter;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        UserRegisterNewsletterEvent::class => [
            UserRegisterNewsletterListener::class,
        ],
        ArticlePublierEvent::class => [
            ArticlePublierListener::class,
        ],
        WelcomeEvent::class => [
            WelcomeListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
