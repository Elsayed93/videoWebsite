<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\BackEnd\Tags\Store;
use App\Models\Tag;

class Tags extends BackEndController
{
    public function __construct(Tag $model)
    {
        parent::__construct($model);
    }

    public function store(Store $request)
    {
        $this->model->create($request->all());
        return redirect()->route('tags.index');
    }

    public function update($id, Store $request)
    {
        $user = $this->model->findorfail($id);
        $user->update($request->all());
        return redirect()->route('tags.edit', $user->id);
    }


}
