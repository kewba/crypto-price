<?php

namespace App\Http\Controllers;

use App\bbiNewsItemsModel;
use Illuminate\Http\Request;
use App\Http\Resources\bbc_news as NewResource;

class BbiNewsItemsModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }



    /**
     * List news items based on channel.
     *
     * @return \Illuminate\Http\Response
     */
    public function channItemList($bbc_id)
    {
        $newsList = bbiNewsItemsModel::where('bbc_id',$bbc_id)->paginate(15);
        return view('admin.news_item_list',['nl'=>$newsList]);
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function itemsList()
    {
        $newsList = bbiNewsItemsModel::paginate(15);
        return $newsList;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function remChars($str){
        $newStr = str_replace('â€“','',$str);
        $newStr = str_replace('â€”','',$newStr);
        $newStr = str_replace('â€˜','',$newStr);
        $newStr = str_replace('â€™','',$newStr);
        $newStr = str_replace('â€œ','',$newStr);
        $newStr = str_replace('â€','',$newStr);
        $newStr = str_replace('.','',$newStr);
        $newStr = str_replace(',','',$newStr);
        $newStr = str_replace(':','',$newStr);
        $newStr = str_replace('?','',$newStr);
        $newStr = str_replace('\\','',$newStr);
        $newStr = str_replace('/','-',$newStr);
        $newStr = str_replace('â‚¬','',$newStr);
        $newStr = str_replace('â','',$newStr);
        $newStr = str_replace(';','',$newStr);
        $newStr = str_replace('!','',$newStr);
        $newStr = str_replace('€¦','',$newStr);
        $newStr = str_replace('[','',$newStr);
        $newStr = str_replace(']','',$newStr);
        $newStr = str_replace('Â 3','',$newStr);
        $newStr = str_replace('Â®','',$newStr);
        $newStr = str_replace('|','',$newStr);
        return $newStr;
       }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bbiNewsItemsModel  $bbiNewsItemsModel
     * @return \Illuminate\Http\Response
     */
    public function show(bbiNewsItemsModel $bbiNewsItemsModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bbiNewsItemsModel  $bbiNewsItemsModel
     * @return \Illuminate\Http\Response
     */
    public function edit(bbiNewsItemsModel $bbiNewsItemsModel, $bbi_id)
    {
        $newsItem = bbiNewsItemsModel::where('bbi_id',$bbi_id)->first();
        return view('admin.news_item',['ni'=>$newsItem]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bbiNewsItemsModel  $bbiNewsItemsModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bbiNewsItemsModel $bbiNewsItemsModel, $bbi_id)
    {
        $request->validate([
            'bbi_title'=>'required',
            'bbi_link'=>'required',
            'bbi_desc'=>'required',
            'bbi_cats'=>'required'
            ]);

        $iTitle         = $request->input('bbi_title');
        $i_bbi_id        = $request->input('bbi_id');
        $i_bbc_id        = $request->input('bbc_id');
        $i_bbc_name      = $request->input('bbc_name');
        $i_bbi_link      = $request->input('bbi_link');
        $i_bbi_pubdate   = $request->input('bbi_pubdate');
        $i_bbi_cats      = $request->input('bbi_cats');
        $i_bbi_desc      = $request->input('bbi_desc');
        $i_bbi_timestamp = $request->input('bbi_timestamp');
        $i_bbi_seo_url   = self::mkSeoUrl(self::remChars($request->input('bbi_title')));
        $i_bbi_category  = $request->input('bbi_category');

        bbiNewsItemsModel::where('bbi_id',$bbi_id)->update([
            'bbc_id'        => $i_bbc_id,
            'bbc_name'      => $i_bbc_name,
            'bbi_title'     => $iTitle,
            'bbi_link'      => $i_bbi_link,
            'bbi_pubdate'   => $i_bbi_pubdate,
            'bbi_cats'      => $i_bbi_cats,
            'bbi_desc'      => $i_bbi_desc,
            'bbi_timestamp' => $i_bbi_timestamp,
            'bbi_seo_url'   => $i_bbi_seo_url,
            'bbi_category'  => $i_bbi_category
            ]);
        return redirect()->route('bni.itemlist',$i_bbc_id);
    }


       /**
     * Show single News Channels.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delchk($bbi_id)
    {
        $ni = bbiNewsItemsModel::where('bbi_id',$bbi_id)->first();
        return view('admin.news_item_delchk',['ni'=>$ni]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bbiNewsItemsModel  $bbiNewsItemsModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(bbiNewsItemsModel $bbiNewsItemsModel, $bbi_id)
    {
        $ni = bbiNewsItemsModel::where('bbi_id',$bbi_id)->first();
        bbiNewsItemsModel::where('bbi_id',$bbi_id)->delete();
        return redirect()->route('bni.itemlist',$ni['bbc_id']);
    }

    public static function mkSeoUrl($title){
        $titleArr = explode(" ", $title);//break up sentence
        $wordCount = 0; //Word counter
        $seoText='';
        $catList='';
        //put word back together with -
        foreach ($titleArr as $tp) {
          $wordCount++;
          if ($wordCount == count($titleArr)) {//check if last word
            $seoText .=$tp;
          }else{
            $seoText .=$tp.'-';
          }
        }
        return strtolower ($seoText);
    }
}
