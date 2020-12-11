<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class BackEndController extends Controller
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index()
    {

        $users = $this->model;
        $users = $this->filter($users);
        $users = $users->paginate(10);

        $modelName = $this->getClassNameFromModel();
        $singleModelName = $this->getModelName();
        $pageTitle = $modelName . ' page';
        $pageDesc = 'you can add, edit and delete user from here';

        return view('back-end.' . $this->getClassNameFromModel() . '.index', compact(
            $this->getClassNameFromModel(),
            'modelName',
            'pageTitle',
            'pageDesc',
            'singleModelName'
        ));
    }

    public function create()
    {
        $modelName = $this->getModelName();
        $pageTitle = $modelName . ' home page';
        $pageDesc = 'you can create user from here';
        return view('back-end.' . $this->getClassNameFromModel() . '.create', compact(
            'modelName',
            'pageTitle',
            'pageDesc'
        ));
    }

    public function destroy($id)
    {
        $this->model->findorfail($id)->delete();
        return redirect()->route($this->getClassNameFromModel() . '.index');
    }

    public function edit($id)
    {
        $modelName = $this->getModelName();
        $pageTitle = $modelName . ' home page';
        $pageDesc = 'you can edit user from here';

        $user = $this->model->findorfail($id);
        return view('back-end.' . $this->getClassNameFromModel() . '.edit', compact(
            'user',
            'modelName',
            'pageTitle',
            'pageDesc'
        ));
    }

    protected function filter($rows)
    {
        return $rows;
    }

    // protected function pluralModelName()
    // {
    //     return strtolower(class_basename($this->model));
    // }

    protected function getModelName() //(User) Model
    {
        return ucfirst(strtolower(class_basename($this->model))); //return User
    }

    protected function getClassNameFromModel() //(Users) Class => usersController
    {
        return Str::plural(strtolower($this->getModelName())); // return Users
    }
}
