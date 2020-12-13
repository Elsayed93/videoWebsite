<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\BackEnd\Pages\Store;
use App\Models\Page;

class Pages extends BackEndController
{
    public function __construct(Page $model)
    {
        parent::__construct($model);
    }

    public function store(Store $request)
    {
        $this->model->create($request->all());
        return redirect()->route('pages.index');
    }

    public function update($id, Store $request)
    {
        $user = $this->model->findorfail($id);
        $user->update($request->all());
        return redirect()->route('pages.edit', $user->id);
    }
}
