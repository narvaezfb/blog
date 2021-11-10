<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\User;
use App\Mail\Welcome;
use App\Http\Requests\RegistrationForm;


class RegistrationController extends Controller
{
    //
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationForm $form)
    {
        //validate the form
        // $this->validate(request(),[
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|confirmed'
        // ]);

        // $user = User::create([ 

        //     'name' => request('name'),
            
        //     'email' => request('email'),
        
        //     'password' => bcrypt(request('password'))
        
        // ]);;

        // //sign the user
        // auth()->login($user);

        // \Mail::to($user)->send(new Welcome($user));
        //redirect to home page
        $form->persist();

        session()->flash('message', 'Thanks so much for singing up');

        return redirect()->home();

    }
}
