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
}
