<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

use App\News;
use App\Likes;

class NewsController extends Controller
{
    public function create(){
        $user = Auth::user();
        $name = $user->name;
        $user_id = $user->id;

        return view('create', ['name' => $name]);
    }

    public function store(Request $request){
        $user = Auth::user();
        $user_id = $user->id;

        $request->validate([
            'name' => 'required|string|min:3',
            'text' => 'required|string|min:16'
        ]);

        $news = new News;
        $imagePath = '';

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $news->image_path = $imagePath;
        }

        $news = News::create([
            'text' => $request->text,
            'name' => $request->name,
            'user_id' => $user_id,
            'image' => $imagePath,
            'code' => $request->code
        ]);
        
        return view('alarm', ['text' => 'Статья успешно создана!']);
    }

    public function allData(){
        $user = Auth::user();
        $name = $user->name;

        $news = new News;
        return view('news', ['data' => $news -> orderBy('id', 'desc') -> get()], ['name' => $name]);
    }

    public function show($id) {
        $image = null;
        $user = Auth::user();
        $name = $user->name;     
    
        $news = News::findOrFail($id);

        $like = Likes::where('user_id', $user->id)
                ->where('news_id', $id)
                ->first();
        
        
        return view('article', compact('news', 'name', 'image'), ['like' => $like]);
    }
}
