<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AdminAuthenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not Adminauthenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function authenticate($request,array $guards)
    {
      //  if (! $request->expectsJson()) {
         //   return route('admin.login');
       // }
       if ($this -> auth->guard('admin')->check()){
           return $this->auth->shouldUse('admin');
       }
       $this->unauthenticated($request,['admin']);

    }
}
