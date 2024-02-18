<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Providers\RouteServiceProvider;
use App\Likes;
use App\News;

class FeedbackController extends Controller
{
    public function like(Request $request){
        $newsId = $request->id;
        $likesCount = $request->likes_count;

        $likesCount++;

        $user = Auth::user();
        $userId = $user->id;

        $news = News::find($newsId);
        $news->likes_count = $likesCount;
        $news->save();

        $likes = Likes::create([
            'news_id' => $newsId,
            'user_id' => $userId
        ]);


        return redirect()->back();
    }
}
