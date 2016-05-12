<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'summary', 'body', 'picture_url',
    ];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';
}
