<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //
    public function index()
    {
        $view = view('frontend.landingPage');
        $view->modules = Module::all();
        return $view;
    }
}
