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
            session()->flash('success_message','Activation complete');
            return redirect()->route('authentication.getLogin')->withInput()->withErrors($this->messageBag);
        } else {
            $this->messageBag->add('email', __('Wrong activation code.'));
            return redirect()->route('authentication.getLogin')->withInput()->withErrors($this->messageBag);
        }
    }

    public function getCreateActivation(User $user) {
        if(\ActivationHelper::createActivation($user->id)) {
            dd('Activation created');
        }
    }
}
