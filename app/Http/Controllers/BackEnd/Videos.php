<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\backend\Videos\Store as VideosStore;
use App\Http\Requests\backend\Videos\Store as VideosUpdate;
use App\Models\Video;
use App\Models\Category;
use App\Models\Skill;
use App\Models\Tag;

class Videos extends BackEndController
{
    use CommentTrait;

    public function __construct(Video $model)
    {
        parent::__construct($model);
    }

    protected function with()
    {
        return ['cat', 'user'];
    }

    protected function append()
    {

        $array = [
            'categories' => Category::get(),
            'skills' => Skill::get(),
            'tags' => Tag::get(),
            'selectedSkills' => [],
            'selectedTags' => [],
            'comments' => []
        ];

        if (request()->route()->parameter('video')) {
            $array['selectedSkills'] = $this->model->find(request()->route()->parameter('video'))
                ->skills()->get()->pluck('id')->toArray();

            $array['selectedTags'] = $this->model->find(request()->route()->parameter('video'))
                ->tags()->pluck('tags.id')->toarray();

            $array['comments'] = $this->model->find(request()->route()->parameter('video'))
                ->comments()->with('user')->get();

            // dd($array['selectedSkills']);
        }

        return $array;
    }

    public function store(VideosStore $request)
    {
        $fileName = $this->uploadImage($request);
        $requestArray =  ['user_id' => auth()->user()->id, 'image' => $fileName] + $request->all();
        $row = $this->model->create($requestArray);
        $this->syncTagsSkills($row, $requestArray);

        return redirect()->route('videos.index');
    }

    public function update($id, VideosUpdate $request)
    {

        $requestArray = $request->all();

        if ($request->hasFile('image')) {
            $fileName = $this->uploadImage($request);
            $requestArray = ['image' => $fileName] + $requestArray;
        }
        $row = $this->model->findorfail($id);
        $row->update($requestArray);
        $this->syncTagsSkills($row, $requestArray);

        return redirect()->route('videos.edit', $row->id);
    }

    protected function syncTagsSkills($row, $requestArray)
    {
        if (isset($requestArray['skills']) && !empty($requestArray['skills'])) {
            $row->skills()->sync($requestArray['skills']);
        }

        if (isset($requestArray['tags']) && !empty($requestArray['tags'])) {
            $row->tags()->sync($requestArray['tags']);
        }
    }

    protected function uploadImage($request)
    {
        $file = $request->file('image');
        $fileName = time() . random_int(5, 10) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $fileName);
        return $fileName;
    }
}
