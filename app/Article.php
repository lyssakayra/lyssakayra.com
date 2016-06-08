<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Date;

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

    protected $appends = [
        'is_new'
    ];
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

    function getIsNewAttribute() {
        $twoDaysAgo = Date('Y-m-d H:i:s', strtotime("-2 days"));
        if ($this->created_at > $twoDaysAgo) {
            return $this->is_new = true;
        } else {
            return $this->is_new = false;
        }
    }
}
