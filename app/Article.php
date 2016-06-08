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
        'title', 'summary', 'body', 'picture_url', 'slug',
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

    static function getBySlug($slug) {
        return self::where('slug',$slug)->get()->first();
    }

    static function slugify($text) {
      // replace non letter or digits by -
      $text = preg_replace('~[^\pL\d]+~u', '-', $text);

      // transliterate
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

      // remove unwanted characters
      $text = preg_replace('~[^-\w]+~', '', $text);

      // trim
      $text = trim($text, '-');

      // remove duplicate -
      $text = preg_replace('~-+~', '-', $text);

      // lowercase
      $text = strtolower($text);

      if (empty($text)) {
        return 'n-a';
      }

      return $text;
    }
}
