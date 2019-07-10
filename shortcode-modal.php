<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;

/**
 * Class ShortcodeModalPlugin
 * @package Grav\Plugin
 */
class ShortcodeModalPlugin extends Plugin
{
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
            return;
        }
    }

}
