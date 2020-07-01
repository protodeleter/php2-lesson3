<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 27.06.2020
 * Time: 14:39
 */

namespace Models;

class News extends \Model implements getSingleInterface
{
    use getSingleTrait;
    protected const TABLE = 'news';


    public function getSingle(): object
    {
        return self::findById ();
    }

    public static function getNewsWithAuthors () {

        $news = News::findAll ();

        foreach ($news as $new) {
            if ($new -> authors_id != null) {
                $ath = new Authors();
                $ath->id = $new->authors_id;
                $new -> author = $ath->getSingle ();
            }
        }
        return $news;
   }

}
