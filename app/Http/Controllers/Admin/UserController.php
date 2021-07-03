<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|max:12|min:6',
            'email' => 'required|email|unique:App\Models\User,email',
            'role' => 'required',
            'password' => 'required|min:6|confirmed'
        ],[
            'username.required' => 'bidang harus diisi',
            'username.max'  => 'username tidak boleh lebih dari 12 karakter',
            'username.min'  => 'username tidak boleh kurang dari 6 karakter ',
            'email.required' => 'bidang harus diisi',
            'email.email' => 'format tidak sesuai',
            'email.unique' => 'email sudah terdaftar',
            'role.required' => 'bidang harus diisi',
            'password.required' => 'bidang harus diisi',
            'password.min'  => 'password tidak boleh kurang dari 6 karakter ',
            'password.confirmed' => 'password tidak sama'
        ]);
        
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit',['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'username' => 'required|max:12|min:6',
            'email' => 'required|email',
            'role' => 'required',
            'password' => 'confirmed'
        ],[
            'username.required' => 'bidang harus diisi',
            'username.max'  => 'username tidak boleh lebih dari 12 karakter',
            'username.min'  => 'username tidak boleh kurang dari 6 karakter ',
            'email.required' => 'bidang harus diisi',
            'email.email' => 'format tidak sesuai',
            'role.required' => 'bidang harus diisi',
            'password.confirmed' => 'password tidak sama'
        ]);

        $oldPasswordHashed = Auth::user()->password;

        // Cek jika password diganti
        if($request->password) {
            if(!Hash::check($request->password,$oldPasswordHashed)){
                $user->password = Hash::make($request->password);
            } 
        }

        $user->username = $request->username;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('user.index')->with('status','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index')->with('status','Data berhasil di Hapus');
    }
}
