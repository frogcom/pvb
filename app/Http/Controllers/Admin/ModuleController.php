<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        if (($request->hasFile('file'))) {
            $file = $request->file('file');

            $filename = time() . '_' . $file->hashName();
            $path = $file->storeAs('modules', $filename, 'public');

            $module->image()->create([
                'url' => $path,
            ]);
        }

        $module->category()->associate($request->get('category_id'));
        $module->save();
        //
        return redirect()->route('module.index');
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
        // todo hou rekening met bestaande aanmeldingen
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
        Storage::disk('public')->delete('modules'.$module->image->url);
        $module->image()->delete();
        $module->delete();
        return redirect()->route('modules.index');
        //
    }
}
