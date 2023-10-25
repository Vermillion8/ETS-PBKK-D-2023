<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'ssn' => ['required', 'string', 'max:255', 'unique:'.Doctor::class],
            'dob' => ['required', 'date', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'specialty' => ['required', 'string', 'max:255']
        ]);

        $doctor = Doctor::create([
            'name' => $request->name,
            'ssn' => $request->ssn,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'specialty' => $request->specialty
        ]);

        event(new Registered($doctor));

        Auth::login($doctor);

        return redirect(RouteServiceProvider::HOME);
    }
}
