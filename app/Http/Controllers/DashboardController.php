<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function userCount()
    {
        $userCount = User::count();
        return view('pages.dashboard', ['userCount' => $userCount]);
    }
}
