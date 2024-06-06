<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RegistrationsController extends Controller
{
    //
    public function index()
    {
        return view('frontend.registration');
    }

    public function store(Request $request){

        $module = Model::find($request->model_id);
        $module->registrations()->count();

        if($module->registrations()->count() >= $module->total_spots){
            $reqistration = Registration::create([
                'student_name ' => $request->get('student_name'),
                'student_email ' => $request->get('student_email'),
                'student_phone ' => $request->get('student_phone'),
            ]);
            $reqistration->assosiate($request->get('module_id'));
            $reqistration->save();
            return redirect()->route('keuzenmodules.index')->with('success', 'aanmelding is gelukt');
        }
        return redirect()->route('keuzenmodules.index')->with('error', 'er zijn geen plekken meer over in dit keuzendeel');

    }
}
