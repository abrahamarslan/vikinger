<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('cir.{id}', function ($id) {
    return (int) \Cartalyst\Sentinel\Laravel\Facades\Sentinel::check()->id != null;
});

Broadcast::channel('ccr-bar-{fromID}-{toID}', function () {
    return (int) \Cartalyst\Sentinel\Laravel\Facades\Sentinel::check()->id != null;
});

Broadcast::channel('ccr-{fromID}-{toID}', function () {
    return (int) \Cartalyst\Sentinel\Laravel\Facades\Sentinel::check()->id != null;
});


Broadcast::channel('cto-{toID}', function () {
    return (int) \Cartalyst\Sentinel\Laravel\Facades\Sentinel::check()->id != null;
});

Broadcast::channel('online-now', function ($user) {
    if($userLoggedIn = \Cartalyst\Sentinel\Laravel\Facades\Sentinel::check()) {
        return $userLoggedIn;
    }
});
