<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Category;
use App\Http\Requests\BackEnd\Categories\Store;

class Categories extends BackEndController
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }

    public function store(Store $request)
    {
        $this->model->create($request->all());
        return redirect()->route('categories.index');
    }

    public function update($id, Store $request)
    {
        $user = $this->model->findorfail($id);
        $user->update($request->all());
        return redirect()->route('categories.edit', $user->id);
    }
}
