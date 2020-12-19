<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Skill;

class HomeController extends Controller
{
    //
    public function index()
    {
        $videos = Video::orderBy('id', 'desc')->paginate(30);
        return view('home', compact('videos'));
    }

    public function category($id)
    {
        $cat = Category::findOrFail($id);
        $videos = Video::where('cat_id', $id)->orderBy('id', 'desc')->paginate(30);
        return view('front-end.category.index', compact('videos', 'cat'));
    }
    public function video($id)
    {
        $video = Video::findOrFail($id);
        return view('front-end.video.index', compact('video'));
    }
    public function Skills($id)
    {
        $skill = Skill::findOrFail($id);
        $videos = Video::whereHas('skills', function ($query) use ($id) {
            $query->where('skill_id', $id);
        })->orderBy('id', 'desc')->paginate(30);
        return view('front-end.skill.index', compact('videos', 'skill'));
    }
}
