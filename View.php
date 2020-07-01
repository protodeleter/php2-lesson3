<?php

class View implements Countable
{

    use \Models\get_set_trait;

    public function display(string $template)
    {
        include $template;
    }

    public function render(string $template)
    {
        ob_start();
        include $template;
        $contents = ob_get_contents();
        ob_end_clean();
        return $contents;
    }

    public function count()
    {
        return count($this->data);
    }
}
