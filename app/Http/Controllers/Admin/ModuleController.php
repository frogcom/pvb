<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $view = view('modules.index');
        $view->modules = Module::all();
        return $view;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $view = view('modules.create');
        $view->categories = Category::all();


        return $view;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $module = Module::create([
            'title' => $request->get('title'),
            'text' => $request->get('text'),
            'available_spots' => $request->get('available_spots'),
            'total_spots' => $request->get('available_spots'),
        ]);

        $module->category()->associate($request->get('category_id'));
        $module->save();
        //
        return redirect()->route('modules.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Module $module)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module)
    {
        //

        $view = view('modules.edit');

        $view->module = $module;
        $view->categories = Category::all();


        return $view;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Module $module)
    {
        //
        $module->update([
            'title' => $request->get('title'),
            'text' => $request->get('text'),
            'available_spots' => $request->get('available_spots'),
            'total_spots' => $request->get('available_spots'),
        ]);

        $module->category()->associate($request->get('category_id'));
        $module->save();
        //
        return redirect()->route('modules.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Module $module)
    {
        $module->delete();
        return redirect()->route('modules.index');
        //
    }
}
