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

        $rows = $this->model;
        $rows = $this->filter($rows);
        $with=$this->with();
        if(!empty($with)){
            $rows=$rows->with($with);
        }
        $rows = $rows->paginate(10);

        $modelName = $this->getClassNameFromModel();
        $singleModelName = $this->getModelName();
        $pageTitle = $modelName . ' page';
        $pageDesc = 'you can add, edit and delete '. $this->getClassNameFromModel() .' from here';
        $routeName = $this->getClassNameFromModel(); //users
        

        return view('back-end.' . $this->getClassNameFromModel() . '.index', compact(
            'rows',
            'modelName',
            'pageTitle',
            'pageDesc',
            'singleModelName',
            'routeName'
        ));
    }

    public function create()
    {
        $modelName = $this->getModelName();
        $pageTitle = $modelName . ' home page';
        $pageDesc = 'you can create '. $this->getModelName() .' from here';
        $routeName = $this->getClassNameFromModel(); //users
        $singleModelName = $this->getModelName();
        $append=$this->append();

        return view('back-end.' . $routeName . '.create', compact(
            'modelName',
            'pageTitle',
            'pageDesc',
            'routeName',
            'singleModelName'
        ))->with($append);
    }

    public function destroy($id)
    {
        $this->model->findorfail($id)->delete();
        return redirect()->route($this->getClassNameFromModel() . '.index');
    }

    public function edit($id)
    {
        $modelName = $this->getModelName();
        $singleModelName = $this->getModelName();
        $pageTitle = $modelName . ' home page';
        $pageDesc = 'you can edit user from here';
        $routeName = $this->getClassNameFromModel(); //users
        $append=$this->append();

        $row = $this->model->findorfail($id);
        return view('back-end.' . $routeName . '.edit', compact(
            'row',
            'modelName',
            'pageTitle',
            'pageDesc',
            'routeName',
            'singleModelName',
            
        ))->with($append);
    }

    protected function filter($rows)
    {
        return $rows;
    }
    protected function with()
    {
        return [];
    }

    protected function pluralModelName()
    {
        return strtolower(class_basename($this->model)); //user
    }

    protected function getModelName() //(User) Model
    {
        return ucfirst($this->pluralModelName()); //return User
    }

    protected function getClassNameFromModel() //(Users) Class => usersController
    {
        return Str::plural(strtolower($this->getModelName())); // return users
    }
    protected function append()
    {
        return [];
    }
}
