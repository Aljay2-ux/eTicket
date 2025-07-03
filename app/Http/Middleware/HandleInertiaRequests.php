<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Middleware;
use Tighten\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    // ...
 
    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request)
    {
 
        return [
            ...parent::share($request),
            'auth' => Auth::user() ?[
                'user' => [
                'username' => Auth::user() -> name,
                'email' => Auth::user() -> email,
                'id' => Auth::user() -> id

                ]
                
            ] : null
        ];
    }
}