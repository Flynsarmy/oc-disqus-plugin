<?php

namespace Flynsarmy\Disqus;

use System\Classes\PluginBase;

/**
 * Disqus Plugin Information File.
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Disqus',
            'description' => 'Provides a Disqus component which outputs comments for the current page.',
            'author'      => 'Flynsarmy',
            'icon'        => 'icon-comment',
        ];
    }

    public function registerComponents()
    {
        return [
            '\Flynsarmy\Disqus\Components\Disqus' => 'disqusComments',
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Disqus',
                'icon'        => 'icon-comment',
                'description' => 'Configure Disqus authentication parameters.',
                'class'       => 'Flynsarmy\Disqus\Models\Settings',
                'order'       => 210,
            ],
        ];
    }
}
