<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Mail\convermationMail;
use App\Models\Module;
use App\Models\Registration;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationsController extends Controller
{
    //
    public function index()
    {

        $view = view('frontend.registration');
        $view->modules = Module::all();
        return $view;
    }

    public function store(RegistrationRequest $request)
    {

        $module = Module::find($request->get('module_id'));

        if ($module->available_spots >= 1) {
            $registration = Registration::create([
                'student_name' => $request->get('student_name'),
                'student_email' => $request->get('student_email'),
                'student_phone' => $request->get('student_phone'),
            ]);
            $registration->module()->associate($request->get('module_id'));
            $registration->save();

            --$module->available_spots;
            $module->save();
            return redirect()->route('aanmelden')->with('success', 'aanmelding is gelukt');
        }
        return redirect()->route('aanmelden')->withInput()->with('error', 'er zijn geen plekken meer over in dit keuzendeel');

    }
}
