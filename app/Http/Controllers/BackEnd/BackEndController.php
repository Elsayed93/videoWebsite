<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BackEndController extends Controller
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $users = $this->model->paginate(10);
        return view('back-end.' . $this->getClassNameFromModel() . '.index', compact($this->getClassNameFromModel()));
    }

    public function create()
    {
        return view('back-end.' . $this->getClassNameFromModel() . '.create');
    }

    public function destroy($id)
    {
        $this->model->findorfail($id)->delete();
        return redirect()->route($this->getClassNameFromModel() . '.index');
    }

    public function edit($id)
    {
        $user = $this->model->findorfail($id);
        return view('back-end.' . $this->getClassNameFromModel() . '.edit', compact('user'));
    }


    protected function getClassNameFromModel()
    {
        return Str::plural(strtolower(class_basename($this->model)));
    }
}
