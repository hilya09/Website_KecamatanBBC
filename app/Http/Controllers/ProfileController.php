<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.profile', [
            "title" => "Profil"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    public function editprofil(User $id)
    {
        $user = User::find($id);
        // dd($user);
        return view('dashboard.editprofile',[
            "title" => "Edit Profile"
        ], compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function updateprofil(Request $request, $id)
    {
        $rules = [
            'name'=> 'required|max:225',
            'notelp'=> 'required|max:225',
            'email'=> 'required|max:225',
        ];

        $validatedData =$request-> validate($rules);
        $user = User::select('id', 'name', 'email', 'notelp')->whereId($id)->firstOrFail();
        User::where('id', $user->id)->update($validatedData);

        return redirect('/editprofil')->with('success', 'Profile berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function updatepass(Request $request, $id)
    {
        $rules = [
            'password_lama'=> 'required|min:5',
            'newpassword'=> 'required|min:5|confirmed'
        ];

        $validatedData =$request-> validate($rules);

        $user = User::select('id', 'password')->whereId($id)->firstOrFail();

        if (Hash::check($request->password_lama, $user->password)) {
            $user->update(['password' => Hash::make($request->newpassword)]);
            return redirect('/editpass')->with('updatesuccess', 'Password berhasil diperbarui');
        } else {
            return redirect('/editpass')->with('updatefail', 'Password gagal diperbarui');
        }
    }
    
    public function editpass(User $id)
    {
        $user = User::find($id);
        // dd($user);
        return view('dashboard.editpass',[
            "title" => "Ubah Password"
        ], compact('user'));
    }

    
}
