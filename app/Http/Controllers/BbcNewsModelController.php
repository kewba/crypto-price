<?php

namespace App\Http\Controllers;

use App\bbcNewsModel;
use Illuminate\Http\Request;

class BbcNewsModelController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nc = bbcNewsModel::get();
        return view('admin.news_channel',['cl'=>$nc]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news_ch_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request);
         $request->validate([
             'bbc_channel'=>'required',
             'bbc_link'   =>'required',
             'bbc_desc'   =>'required',
             'bbc_lang'   =>'required'
             ]);

         $channelName = $request->input('bbc_channel');
         $channelLink = $request->input('bbc_link');
         $channelDesc = $request->input('bbc_desc');
         $channelLang = $request->input('bbc_lang');
         $channelImg  = $request->input('bbc_img');

         $newsChann =  new bbcNewsModel();
         $newsChann->bbc_channel = $channelName;
         $newsChann->bbc_link    = $channelLink;
         $newsChann->bbc_desc    = $channelDesc;
         $newsChann->bbc_lang    = $channelLang;
         $newsChann->bbc_chan_fav = $channelImg;
         $newsChann->bbc_timestamp = date("Y-m-d H:i:s");
         $newsChann->bbc_last_mod = date("Y-m-d H:i:s");
         $newsChann->save();

         return redirect()->route('bnc.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bbcNewsModel  $bbcNewsModel
     * @return \Illuminate\Http\Response
     */
    public function show(bbcNewsModel $bbcNewsModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bbcNewsModel  $bbcNewsModel
     * @return \Illuminate\Http\Response
     */
    public function edit($bbc_id)
    {
        $newsChannel = bbcNewsModel::where('bbc_id',$bbc_id)->first();
        return view('admin.news_single',['nc'=>$newsChannel]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bbcNewsModel  $bbcNewsModel
     * @return \Illuminate\Http\Response
     */
    public function imgEdit($bbc_id)
    {
        
        //$dir    = realpath(__DIR__.'/../../../public_html/img/new_channel');
        $dir    = realpath(__DIR__.'/../../../public/img/new_channel');
        $files1 = scandir($dir);
        $ff = [];
        foreach ($files1 as $v) {
           if ($v == '.' or $v == '..') {
               //Do nout
           }else{
            $ff[] = $v; 
           }
        }
        $newsChannel = bbcNewsModel::where('bbc_id',$bbc_id)->first();
        return view('admin.news_img',['nc'=>$newsChannel, 'files'=>$ff]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bbcNewsModel  $bbcNewsModel
     * @return \Illuminate\Http\Response
     */
    public function imgUpdate(Request $request,$bbc_id)
    {
        $imgName = $request->input('bbc_chan_fav');
        bbcNewsModel::where('bbc_id',$bbc_id)->update(['bbc_chan_fav' => $imgName]);
        return redirect()->route('bnc.edit',$bbc_id);
    }

     /**
     * Show single News Channels.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delchk($bbc_id)
    {
        $newsChannel = bbcNewsModel::where('bbc_id',$bbc_id)->first();
        return view('admin.news_delchk',['nc'=>$newsChannel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bbcNewsModel  $bbcNewsModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bbcNewsModel $bbcNewsModel,$bbc_id)
    {
        //dd($request);
        $request->validate(['bbc_channel'=>'required']);

        $channelName = $request->input('bbc_channel');
        $channelLink = $request->input('bbc_link');
        $channelDesc = $request->input('bbc_desc');
        $channelLang = $request->input('bbc_lang');
        $channelImg  = $request->input('bbc_img');
        bbcNewsModel::where('bbc_id',$bbc_id)->update([
            'bbc_channel'  => $channelName,
            'bbc_link'     => $channelLink,
            'bbc_desc'     => $channelDesc,
            'bbc_lang'     => $channelLang,
            'bbc_chan_fav' => $channelImg
            ]);
        return redirect()->route('bnc.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bbcNewsModel  $bbcNewsModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(bbcNewsModel $bbcNewsModel, $bbc_id)
    {
        bbcNewsModel::where('bbc_id',$bbc_id)->delete();
        return redirect()->route('bnc.index');
    }
}
