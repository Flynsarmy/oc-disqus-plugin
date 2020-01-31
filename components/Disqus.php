<?php

namespace Flynsarmy\Disqus\Components;

use Cms\Classes\ComponentBase;
use Flynsarmy\Disqus\Models\Settings;

// use View;

class Disqus extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Disqus Comments',
            'description' => 'Outputs the Disqus comments for the current page',
        ];
    }

    public function shortname()
    {
        $settings = Settings::instance();

        return $settings->shortname;
    }
}
