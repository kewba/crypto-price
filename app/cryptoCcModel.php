<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cryptoCcModel extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'crypto_cc';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'cc_id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public static function getCryptoPrices(){
        $crypto_data = self::orderBy('cc_timestamp', 'desc')
               ->select('cc_name', 'cc_country', 'cc_volume', 'cc_price', 'cc_timestamp','cc_change','cc_status' )
               ->take(4)
               ->get();

        return $crypto_data;
    }

    public static function getLate30($coin){
        $crypto_data = self::orderBy('cc_timestamp', 'desc')
        ->select('cc_id','cc_name', 'cc_country', 'cc_volume', 'cc_price', 'cc_timestamp','cc_change','cc_status','cc_markets' )
        ->where('cc_name', $coin)
        ->take(30)
        ->get();
        
        return $crypto_data;  
    }

    public static function cryptoNames()
    {
        $cryptArr['BTC'] = 'Bitcoin';
        $cryptArr['LTC'] = 'Litecoin';
        $cryptArr['ETH'] = 'Ethereum';
        $cryptArr['DASH'] = 'Dash';
        return $cryptArr;
    }
}
