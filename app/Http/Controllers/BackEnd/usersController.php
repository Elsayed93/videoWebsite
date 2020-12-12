<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\User;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\BackEnd\Users\Store;
use App\Http\Requests\BackEnd\Users\Update;

class usersController extends BackEndController
{
    //
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    // protected function filter($rows)
    // {
    //     if (request()->has('name') && request()->get('name') != '') {
    //         $rows = $rows->where('name', request()->get('name'));
    //     }
    //     if (request()->has('email') && request()->get('email') != '') {
    //         $rows = $rows->where('email', request()->get('email'));
    //     }

    //     return $rows;
    // }

    public function store(Store $request)
    {
        $reqArray = $request->all();
        $reqArray['password'] = Hash::make($request->password);
        $this->model->create($reqArray);

        return redirect()->route('users.index');
    }

    public function update($id, Update $request)
    {
        $row = $this->model->findorfail($id);
        $reqArray = $request->all();

        if (isset($reqArray['password']) && $reqArray['password'] != '') {
            $reqArray['password'] = Hash::make($request->password);
        }else{
            unset($reqArray['password']);
        }

        $row->update($reqArray);
        return redirect()->route('users.edit', $row->id);
    }
}
