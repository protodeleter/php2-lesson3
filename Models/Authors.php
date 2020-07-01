<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 01.07.2020
 * Time: 20:44
 */

namespace Models;


class Authors extends \Model implements getSingleInterface
{
    use getSingleTrait;
    protected const TABLE = 'authors';

    public function getSingle(): object
    {
        return self::findById ();
    }

}