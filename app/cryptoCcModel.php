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
}
