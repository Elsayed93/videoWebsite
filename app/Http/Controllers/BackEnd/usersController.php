<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\User;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class usersController extends BackEndController
{
    //
    public function __construct(User $model)
    {
        parent::__construct($model);
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

}
