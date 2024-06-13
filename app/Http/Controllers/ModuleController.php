<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    //
    public function index()
    {
        $view = view('frontend.modules.index');
        $view->modules = Module::all();
        return $view;
    }

    public function show(Module $module)
    {
        $view = view('frontend.modules.show');
        $view->module = $module;
        return $view;
    }
}
