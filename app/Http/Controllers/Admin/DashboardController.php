<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Registration;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $view = view('dashboard');
        $view->registrations = Registration::with('module')->get();
        return $view;
    }
}
