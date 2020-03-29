<?php

namespace App\Http\Controllers;
use App\bbiNewsItemsModel;
use App\bbcNewsModel;
use App\cryptoCcModel;
use App\exchangeRatesModel;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsList = bbiNewsItemsModel::orderBy('bbi_timestamp', 'desc')->paginate(6);
        $imgArr = bbcNewsModel::channelLogos();
        $cryptoPrices = cryptoCcModel::getCryptoPrices();
        //get currency exchange rates
        $rates_data = exchangeRatesModel::latestXRates();
        $xchRatesList = json_decode($rates_data[0]['currency_list']);
        $pndVal = $xchRatesList[51]->doll_val;
        //dd($xchRatesList[51]->doll_val);
        $btc_p = $eht_p = $ltc_p = $dash_p = '';
        foreach ($cryptoPrices as $v) {
           if ($v['cc_name'] == 'BTC') {
                $btc_p = '£'.round(($v['cc_price'] * $pndVal ),2);
           }
           if ($v['cc_name'] == 'ETH') {
                $eht_p = '£'.round(($v['cc_price'] * $pndVal ),2);
           }
           if ($v['cc_name'] == 'LTC') {
                $ltc_p = '£'.round(($v['cc_price'] * $pndVal ),2);
           }
           if ($v['cc_name'] == 'DASH') {
                $dash_p = '£'.round(($v['cc_price'] * $pndVal ),2);
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
            $hold ['title']   =   str_replace("â€™", "&#39;",$hold['title']);
            $hold ['title']   =   str_replace("â€˜", "-",$hold['title']);
            $hold ['title']   =   str_replace("â€“", "-",$hold['title']);
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

    public function newsSingle($seo_url)
    {
        $newsItem ='';

        $newsItem = bbiNewsItemsModel::where('bbi_seo_url',$seo_url)->first();
        $imgArr = bbcNewsModel::channelLogos();
        $url =request()->getSchemeAndHttpHost();
        $img_name = $newsItem['bbc_name'];
       
        $relArts = bbiNewsItemsModel::relatedItems($newsItem['bbi_category']);
        $relArtArr=[];
        foreach ($relArts as $r) {
            $relArtHld['rel_title'] = BbiNewsItemsModelController::remChars($r['bbi_title']);
            $rImgNme = $r['bbc_name'];
            $relArtHld['rel_img']   = $imgArr[$rImgNme];
            $relArtHld['rel_link'] = $url.'/news'.'/'.$r['bbi_seo_url'];
            $relArtArr[] =  $relArtHld;
        }
        //dd($relArts);
        $itemArr=[];
        $itemArr['pg_title'] = BbiNewsItemsModelController::remChars($newsItem['bbi_title']);
        $itemArr['pg_desc']  = $newsItem['bbi_desc'];
        $itemArr['pg_meta_title'] = Str::limit(BbiNewsItemsModelController::remChars($newsItem['bbi_title']) , 55);
        $itemArr['pg_meta_desc'] = Str::limit($newsItem['bbi_desc'], 155);
        $itemArr['pg_image'] = $imgArr[$img_name];
        $itemArr['pg_link'] = $newsItem['bbi_link'];
        $itemArr['pg_co_name'] = $newsItem['bbc_name'];
        $itemArr['pg_posted'] = Carbon::createFromTimestampUTC($newsItem['bbi_timestamp'])->diffForHumans();
        // dd($itemArr);Carbon::createFromTimestampUTC($newsItem['bbi_timestamp'])->diffForHumans();
        return view('page.bbnews_single',['newsItem' => $itemArr,'relItems'=> $relArtArr]);
    }
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function news()
    {
        $newsList = bbiNewsItemsModel::orderBy('bbi_timestamp', 'desc')->paginate(25);
        $imgArr = bbcNewsModel::channelLogos();
        //dd($newsList);
        foreach ($newsList as $v) {
            $time_stamp = $v['bbi_timestamp'];
             
             $hum_date =Carbon::createFromTimestampUTC($time_stamp)->diffForHumans();
             $url =request()->getSchemeAndHttpHost();
              $hold = [];
              $img_name = $v['bbc_name'];
              $hold ['title']   =   str_replace("â€™", "&#39;",$v['bbi_title']);
              $hold ['title']   =   str_replace("â€˜", "-",$hold['title']);
              $hold ['title']   =   str_replace("â€“", "-",$hold['title']);
              //$hold ['title']   =  html_entity_decode($v['bbi_title']);
              $hold ['desc']    = Str::limit($v['bbi_desc'], 100);
              $hold ['link']    = $v['bbi_link'];
              $hold ['seo_url']    = $url.'/news'.'/'.$v['bbi_seo_url'];
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
    
        //get currency exchange rates
        $rates_data = exchangeRatesModel::latestXRates();
        $xchRatesList = json_decode($rates_data[0]['currency_list']);
        $pndVal = $xchRatesList[51]->doll_val;
        $xchRatesDate =Carbon::createFromTimestampUTC($rates_data[0]['CREATED_AT'])->diffForHumans();
        
        //get latest times and prices
        $cryptNames = cryptoCcModel::cryptoNames();
        $curr_price = array();
        $ds = array();
        $cnt_once = 0;
        $colours=['red','green','blue','grey'];
       foreach ($cryptNames as $k => $v) {
              
          $cc_times = array();
          $cc_price = array();
          $cc_hold = array();
          $ds_hold = array();
    
          $coinDetObj = cryptoCcModel::getLate30($k);
          foreach ($coinDetObj as $cd) {
            $cc_times[] = date('H:i',$cd->cc_timestamp);
            $cc_price[] = round($cd->cc_price,2);
          }
         
          $cc_times = array_reverse($cc_times);
          $cc_price = array_reverse($cc_price);
          $ds_hold['data'] = $cc_price;
          $ds_hold['label'] = $v;
          $ds_hold['backgroundColor'] = $colours[$cnt_once];
          $ds_hold['fill'] = false;
          $cnt_once++;
    
          $cc_hold['id']        = $coinDetObj[0]->cc_id;
          $cc_hold['name']      = $coinDetObj[0]->cc_name;
          $cc_hold['price']     = $coinDetObj[0]->cc_price;
          $cc_hold['country']   = $coinDetObj[0]->cc_country;
          $cc_hold['volume']    = $coinDetObj[0]->cc_volume;
          $cc_hold['timestamp'] = $coinDetObj[0]->cc_timestamp;
          $cc_hold['change']    = $coinDetObj[0]->cc_change;
          $cc_hold['time_list'] = $cc_times;
          $cc_hold['price_list']= $cc_price;
          $cc_hold['markets']   = json_decode($coinDetObj[0]->cc_markets);
          
          
       
            $dss[] = $ds_hold;
            $ccc[] = $cc_hold;
       }

       $ds['labels'] = $cc_times;
       $ds['datasets'] = $dss;
       $ds['cc_meta'] = $ccc;
       $ds['ctype'] = 'line';
       $chz=json_encode($ds);


       //Get crypto price
       $cryptoPrices = cryptoCcModel::getCryptoPrices();
       $btc_p = $eth_p = $ltc_p = $dash_p = '';
       foreach ($cryptoPrices as $v) {
          if ($v['cc_name'] == 'BTC') {
               $btc_p = round($v['cc_price'], 2);
          }
          if ($v['cc_name'] == 'ETH') {
               $eth_p = round($v['cc_price'], 2);
          }
          if ($v['cc_name'] == 'LTC') {
               $ltc_p = round($v['cc_price'], 2);
          }
          if ($v['cc_name'] == 'DASH') {
               $dash_p = round($v['cc_price'], 2);
          }
       }
       $crypto_prices = [];
        $crypto_prices ['BTC'] = $btc_p;
        $crypto_prices ['ETH'] = $eth_p;
        $crypto_prices ['LTC'] = $ltc_p;
        $crypto_prices ['DASH'] = $dash_p;

       //Loop currency rates for btc rates
        //dd( $xchRatesList); 
        $btcRatesArr = [];
        $ltcRatesArr = [];
        $ethRatesArr = [];
        $dashRatesArr = [];
        foreach ( $xchRatesList as $ch) {
            //btc
            $btcHoldArr['currency'] = $ch->currency;
            $btcHoldArr['btc_val'] =  round(($ch->doll_val * $btc_p), 2);
            $btcRatesArr[] =  $btcHoldArr;

            //ltc
            $ltcHoldArr['currency'] = $ch->currency;
            $ltcHoldArr['ltc_val'] =  round(($ch->doll_val * $ltc_p), 2);
            $ltcRatesArr[] =  $ltcHoldArr;

            //eth
            $ethHoldArr['currency'] = $ch->currency;
            $ethHoldArr['eth_val'] =  round(($ch->doll_val * $eth_p), 2);
            $ethRatesArr[] =  $ethHoldArr;

            //eth
            $dashHoldArr['currency'] = $ch->currency;
            $dashHoldArr['dash_val'] =  round(($ch->doll_val * $dash_p), 2);
            $dashRatesArr[] =  $dashHoldArr;

        }

        foreach ($cryptoPrices as $v) {
            if ($v['cc_name'] == 'BTC') {
                 $btc_p = '£'.round(($v['cc_price'] * $pndVal ),2);
            }
            if ($v['cc_name'] == 'ETH') {
                 $eht_p = '£'.round(($v['cc_price'] * $pndVal ),2);
            }
            if ($v['cc_name'] == 'LTC') {
                 $ltc_p = '£'.round(($v['cc_price'] * $pndVal ),2);
            }
            if ($v['cc_name'] == 'DASH') {
                 $dash_p = '£'.round(($v['cc_price'] * $pndVal ),2);
            }
         }
         $crypto_prices = [];
         $crypto_prices ['BTC'] = $btc_p;
         $crypto_prices ['ETH'] = $eht_p;
         $crypto_prices ['LTC'] = $ltc_p;
         $crypto_prices ['DASH'] = $dash_p;

         
        //dd( $ratesArr); 
        return view('page.crypto',[
            'ch_data' => $ds,
            'chz'=>$chz,
            'btcList'=>$btcRatesArr,
            'ltcList'=>$ltcRatesArr,
            'ethList'=>$ethRatesArr,
            'dashList'=>$dashRatesArr,
            'ratesUpdate'=>$xchRatesDate,
            'crypts'=>$crypto_prices
            ]);
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
