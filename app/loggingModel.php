<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loggingModel extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'logging';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'logs_id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
