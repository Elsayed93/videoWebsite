<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\User;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class usersController extends BackEndController
{
    //
    public function index()
    {
        $users = User::paginate(10);
        return view('back-end.users.index', compact('users'));
    }

    public function create()
    {
        return view('back-end.users.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('users.index');
    }
    public function show()
    {
        return view('back-end.users.edit');
    }

    public function edit($id)
    {
        $user = User::findorfail($id);
        return view('back-end.users.edit', compact('user'));
    }

    public function update($id, Request $request)
    {
        $user = User::findorfail($id);
        $reqArray = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if (request()->has('password') && request()->get('password') != '') {
            $reqArray += ['password' => Hash::make($request->password)];
        }

        $user->update($reqArray);
        return redirect()->route('users.edit', $user->id);;
    }

   

    public function destroy($id)
    {
        User::findorfail($id)->delete();
        return redirect()->route('users.index');

    }

    
}
