<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\BackEnd\Messages\Store;
use App\Http\Requests\BackEnd\Messages\Store as MessagesStore;
use App\Models\Message;

class Messages extends BackEndController
{
    public function __construct(Message $model)
    {
        parent::__construct($model);
    }
    public function replay($id, MessagesStore $request)
    {
        $message = $this->model->findOrFail($id);
        dd($request->message, $id);
    }
}
