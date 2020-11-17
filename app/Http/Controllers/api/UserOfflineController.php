<?php

namespace App\Http\Controllers\api;

use App\Events\UserIsOffline;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DefaultController;
use App\User;
use Illuminate\Http\Request;

class UserOfflineController extends DefaultController
{
    public function __invoke(User $user) {
        $user->online_status = 'Online';
        $user->save();
        broadcast(new UserIsOffline($user));
    }
}
