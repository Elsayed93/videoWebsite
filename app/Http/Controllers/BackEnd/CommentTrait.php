<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\BackEnd\Comments\Store;
use App\Models\Comments;

trait CommentTrait
{
    public function commentStore(Store $request)
    {
        $requestArray = $request->all() + ['user_id' => auth()->user()->id];
        Comments::create($requestArray);
        return redirect()->route('videos.index');
    }
}
