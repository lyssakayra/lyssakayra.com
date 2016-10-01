<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Painting extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'collection_id', 'name', 'description', 'year', 'size', 'url', 'position',
    ];

    protected $appends = [
        'url_thumb'
    ];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'paintings';

    public function getUrlThumbAttribute() {
        $ext = pathinfo($this->url, PATHINFO_EXTENSION);
        return str_replace(".".$ext, "_thumb.".$ext, $this->url);

    }
}
