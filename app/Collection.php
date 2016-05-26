<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'is_default', 'position',
    ];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'collections';

    public function paintings() {
        return $this->hasMany('App\Painting')->orderBy('position');
    }
}
