<?php

namespace App\Http\Controllers\authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\DefaultController;
use Cartalyst\Alerts\Laravel\Facades\Alert;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Laravel\Facades\Reminder;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Cartalyst\Support\Mailer;

class AuthenticationController extends DefaultController
{
     /**
     * Get the user logine view and redirect to dashboard if already logged in.
     * @return
     */
    public function getLogin() {
        if(Sentinel::check()) {
            Alert::warning('You are already logged in!');
            return redirect()->route('user.profile');
        }
        return view('authentication.authentication');
    }
}
