<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bbcNewsModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bbc_news_channel';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'bbc_id';

    const CREATED_AT = 'bbc_timestamp';
    const UPDATED_AT = 'bbc_last_mod';

    public static function channelLogos (){
        $imgArr = [];
        $imgArr['CoinDesk']   = 'img/new_channel/coindesk.png';
        $imgArr['SludgeFeed'] = 'img/new_channel/sludge.jpg';
        $imgArr['NewsBTC']    = 'img/new_channel/NewsBTC.png';
        $imgArr['CCN']        = 'img/new_channel/ccn.png';
        $imgArr['TechCrunch'] = 'img/new_channel/techcruch.png';
        return $imgArr;
    }
}
