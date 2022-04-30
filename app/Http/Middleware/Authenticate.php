<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Validation\Validator;
class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
//            $this->validate(request(), [
//                'name' => 'required',
//                'surname' => 'required',
//                'patronymic' => 'required',
//                'login' => 'required|login',
//                'email' => 'required|email',
//                'password' => 'required'
//            ]);
//
//            $user = User::create(request(['name', 'surname', 'patronymic', 'login', 'email', 'password']));
//
//            auth()->login($user);
//
            return redirect()->to('/login');
//            return route('login');
        }
    }
}
