<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Registration;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RegistrationsController extends Controller
{
    //
    public function index()
    {

        $view =  view('frontend.registration');
        $view->modules = Module::all();
        return $view;
    }

    public function store(Request $request){

        $module = Module::find($request->get('module_id'));

        $count = $module->registrations->count();
        if($count <= $module->total_spots){
            $registration = Registration::create([
                'student_name' => $request->get('student_name'),
                'student_email' => $request->get('student_email'),
                'student_phone' => $request->get('student_phone'),
            ]);
            $registration->module()->associate($request->get('module_id'));
            $registration->save();
            return redirect()->route('aanmelden')->with('success', 'aanmelding is gelukt');
        }
        return redirect()->route('aanmelden')->withInput()->with('error', 'er zijn geen plekken meer over in dit keuzendeel');

    }
}
