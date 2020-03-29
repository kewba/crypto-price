<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bbiNewsItemsModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bbi_new_items';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'bbi_id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public static function relatedItems($cat){
        // if ($cat == 'no-category') {
        //     # code...
        // }
        $crypto_data = self::inRandomOrder()
        ->select('bbi_id','bbc_id', 'bbc_name', 'bbi_title', 'bbi_seo_url' )
        ->where('bbi_category', $cat)
        ->take(3)
        ->get();
        
        return $crypto_data;  
    }
}
