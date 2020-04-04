<?php

namespace App\Http\Controllers;

use App\bbcNewsModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dash');
    }


    /**
     * Show the News Channels.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function newsChannels()
    {
        $nc = bbcNewsModel::get();
        return view('admin.news_channel',['cl'=>$nc]);
    }

     /**
     * Show single News Channels.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function newsChannelsEdit($bbc_id)
    {
        $newsChannel = bbcNewsModel::where('bbc_id',$bbc_id)->first();
        return view('admin.news_single',['nc'=>$newsChannel]);
    }
}
