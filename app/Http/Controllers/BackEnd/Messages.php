<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Message;

class Messages extends BackEndController
{
    public function __construct(Message $model)
    {
        parent::__construct($model);
    }
}
