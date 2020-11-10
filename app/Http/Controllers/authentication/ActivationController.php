<?php

namespace App\Http\Controllers\authentication;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DefaultController;
use App\User;
use Illuminate\Http\Request;


class ActivationController extends DefaultController
{
    public function getActivateUser(User $user, $code) {
        if(\ActivationHelper::completeActivation($user->id,$code)) {
            dd('Activation complete. Redirecting to your profile.');
        }
    }

    public function getCreateActivation(User $user) {
        if(\ActivationHelper::createActivation($user->id)) {
            dd('Activation created');
        }
    }
}
