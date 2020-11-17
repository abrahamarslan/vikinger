<?php

namespace App\Http\Controllers\api;

use App\Events\UserIsOnline;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DefaultController;
use App\User;
use Illuminate\Http\Request;

class UserOnlineController extends DefaultController
{
    public function __invoke(User $user) {
        $user->online_status = 'Online';
        $user->save();
        broadcast(new UserIsOnline($user));
    }
}
