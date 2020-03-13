<?php

namespace App\Http\Controllers;
use App\bbiNewsItemsModel;
use App\bbcNewsModel;
use App\cryptoCcModel;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsList = bbiNewsItemsModel::paginate(6);
        $imgArr = bbcNewsModel::channelLogos();
        $cryptoPrices = cryptoCcModel::getCryptoPrices();
        $btc_p = $eht_p = $ltc_p = $dash_p = '';
        foreach ($cryptoPrices as $v) {
           if ($v['cc_name'] == 'BTC') {
                $btc_p = $v['cc_price'];
           }
           if ($v['cc_name'] == 'ETH') {
                $eht_p = $v['cc_price'];
           }
           if ($v['cc_name'] == 'LTC') {
                $ltc_p = $v['cc_price'];
           }
           if ($v['cc_name'] == 'DASH') {
                $dash_p = $v['cc_price'];
           }
        }
        $crypto_prices = [];
        $crypto_prices ['BTC'] = $btc_p;
        $crypto_prices ['ETH'] = $eht_p;
        $crypto_prices ['LTC'] = $ltc_p;
        $crypto_prices ['DASH'] = $dash_p;
        //dd($cryptoPrices);
        $newItmDispArr =[];
        foreach ($newsList as $v) {
          $time_stamp = $v['bbi_timestamp'];
            
           $hum_date =Carbon::createFromTimestampUTC($time_stamp)->diffForHumans();
            $hold = [];
            $img_name = $v['bbc_name'];
            $hold ['title']   = $v['bbi_title'];
            $hold ['date']   =  $hum_date;
            $hold ['img_url'] = $imgArr[$img_name];
            $newItmDispArr [] = $hold;
           
        }
         //dd($newItmDispArr);
        return view('page.home',['newsItems' => $newItmDispArr,'crypto_prices' => $crypto_prices]);
    }


       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('page.about');
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function news()
    {
        $newsList = bbiNewsItemsModel::paginate(25);
        $imgArr = bbcNewsModel::channelLogos();
        //dd($newsList);
        foreach ($newsList as $v) {
            $time_stamp = $v['bbi_timestamp'];
              
             $hum_date =Carbon::createFromTimestampUTC($time_stamp)->diffForHumans();
              $hold = [];
              $img_name = $v['bbc_name'];
              $hold ['title']   = $v['bbi_title'];
              $hold ['desc']    = $v['bbi_desc'];
              $hold ['link']    = $v['bbi_link'];
              $hold ['date']    =  $hum_date;
              $hold ['img_url'] = $imgArr[$img_name];
              $newItmDispArr [] = $hold;
             
          }
        return view('page.bbnews',['newsItems' => $newItmDispArr, 'mainNewsData'=> $newsList]);
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crypto()
    {
        $btcLabel = "'BTC'";
        //$btc_data = DB::select(DB::raw("SELECT * FROM  crypto_cc WHERE cc_name = ".$btcLabel." limit 350"));
        //$btc_data = DB::table('crypto_cc')->where('cc_name', '=', $btcLabel)->get();
        $btc_data = cryptoCcModel::where('cc_name', 'BTC')
               ->orderBy('cc_timestamp', 'desc')
               ->take(350)
               ->get();
        //dd($btc_data);
        return view('page.crypto');
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('page.contact');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
