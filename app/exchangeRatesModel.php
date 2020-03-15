<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exchangeRatesModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'xchange';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ex_id';

    public static function latestXRates(){
        $xrates_data = self::select('currency_list', 'CREATED_AT' )
               ->take(1)
               ->get();

        return $xrates_data;
    }

}
