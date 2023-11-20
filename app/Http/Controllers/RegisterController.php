<?php

namespace App\Http\Controllers;
use App\Models\Register;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registers =Register::get();
        return view ('/');
    }

    public function simpandata(Request $request)
    {
        $registers = Register::create([
            'Id' => $request->input('Id'),
            'Nama' => $request->input('Nama'),
            'NIM' => $request->input('NIM'),
            'Nomor Telepon' => $request->input('Nomor_Telepon'),
            'Kelas/Prodi' => $request->input('Kelas/Prodi'),
            'Email' => $request->input('Email'),
            'Password' => bcrypt($request->input('Password')),
        ]);

        return redirect('/login');
    }
    public function login()
        {
            return view('login');
        }
    public function ceklogin(Request $request)
        {
            Auth::attempt([
                'Email' => $request->input('Email'),
                'Password' => $request->input('Password'),
            ]);
            return redirect('/dashboard');
        }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
