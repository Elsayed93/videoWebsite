<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request\BackEnd\Videos\Store;

class Videos extends BackEndController
{
    public function __construct(Video $model)
    {
        parent::__construct($model);
    }

    protected function with()
    {
        return ['cat','user'];
    }

    protected function append()
    {

        $array=[
            'categories'=>Category::get(),
            'skills'=>Skill::get(),
            'tags'=>Tag::get(),
            'selectedSkills'=>[],
            'selectedTags'=>[]
         ];

        if(request()->route()->parameter('video')){
            $array['selectedSkills']=$this->model->find(request()->route()->parameter('video'))
            ->skills()->pluck('skills.id')->toarray();

            $array['selectedTags']=$this->model->find(request()->route()->parameter('video'))
            ->tags()->pluck('tags.id')->toarray();

            dd($array['selectedSkills']);
        }

        return $array;
    }
    
    public function store(Store $request)
    {   
        $requestArray=$request->all()+['user_id'=>auth()->user()->id];
        $row=$this->model->create($requestArray);
        $this->syncTagsSkills($row,$requestArray);

        return redirect()->route('videos.index');
    }

    public function update($id, Store $request)
    {   
        $requestArray=$request->all();
        $row = $this->model->findorfail($id);
        $row->update($requestArray);
        $this->syncTagsSkills($row,$requestArray);
        
        return redirect()->route('videos.edit', $row->id);
    }
    protected function syncTagsSkills($row,$requestArray)
    {
        if (isset($requestArray['skills']) && !empty($requestArray['skills'])) {
            $row->skills()->sync($requestArray['skills']);
        }

        if (isset($requestArray['tags']) && !empty($requestArray['tags'])) {
            $row->tags()->sync($requestArray['tags']);
        }
    }
}
