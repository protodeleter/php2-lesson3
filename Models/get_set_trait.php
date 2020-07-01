<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 29.06.2020
 * Time: 22:55
 */

namespace Models;


trait get_set_trait
{
    protected array $data = [];

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }

    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

}