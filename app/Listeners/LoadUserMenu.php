<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Support\Facades\Auth;

class LoadUserMenu
{
    public function handle(Authenticated $event)
    {
        // $user = $event->user;
        // $permissions = $user->getAllPermissions()->pluck('name')->toArray();
        // view()->share('permissions', $permissions);

        // return response()->json($permissions);
    }
}