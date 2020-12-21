<?php

namespace App\Http\Controllers;

use App\Http\Requests\FrontEnd\Comments\Store;
use App\Http\Requests\FrontEnd\Messages\Store as MessagesStore;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Skill;
use App\Models\Tag;
use App\Models\Comments;
use App\Models\Message;
use App\Models\Page;
use App\Models\User;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only([
            'commentUpdate', 'commentStore', 'profileUpdate'
        ]);
    }

    //
    public function index()
    {
        $videos = Video::with('skills', 'tags', 'cat', 'user', 'comments.user')->orderBy('id', 'desc');
        if (request()->has('search') && request()->get('search') != '') {
            $videos = $videos->where('name', 'like', '%' . request()->get('search') . '%');
        }
        $videos = $videos->paginate(30);
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
    public function tags($id)
    {
        $tag = Tag::findOrFail($id);
        $videos = Video::whereHas('tags', function ($query) use ($id) {
            $query->where('tag_id', $id);
        })->orderBy('id', 'desc')->paginate(30);
        return view('front-end.tags.index', compact('videos', 'tag'));
    }
    public function commentUpdate($id, Store $request)
    {
        $comment = Comments::findOrFail($id);
        if (($comment->user_id = auth()->user()->id) || auth()->user()->group == 'admin') {
            $comment->update(['comment' => $request->comment]);
        }
        return redirect()->route('frontend.video', ['id' => $comment->video_id, '#comments']);
    }
    public function commentStore($id, Store $request)
    {
        $video = Video::findOrFail($id);
        Comments::create([
            'user_id' => auth()->user()->id,
            'video_id' => $video->id,
            'comment' => $request->comment
        ]);
        return redirect()->route('frontend.video', ['id' => $video->id, '#comments']);
    }
    public function messageStore(MessagesStore $request)
    {
        Message::create($request->all());
        return redirect()->route('frontend.landing');
    }
    public function welcome()
    {
        $videos = Video::orderBy('id', 'desc')->paginate(9);
        $videos_Count = Video::count();
        $comments_Count = Comments::count();
        $tags_Count = Tag::count();
        return view('welcome', compact('videos', 'videos_Count', 'comments_Count', 'tags_Count'));
    }
    public function page($id, $slug = null)
    {
        $page = Page::findOrFail($id);
        return view('front-end.page.index', compact('page'));
    }
    public function profile($id, $slug = null)
    {
        $user = User::findOrFail($id);
        return view('front-end.profile.index', compact('user'));
    }
}
