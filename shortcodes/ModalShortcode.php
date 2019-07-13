<?php

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class ModalShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('modal', function(ShortcodeInterface $sc) {
            $this->shortcode->addAssets('js', ['jquery', 101]);
            $this->shortcode->addAssets('js', "plugin://shortcode-modal/assets/jquery-modal/jquery.modal.min.js");
            $this->shortcode->addAssets('css', "plugin://shortcode-modal/assets/jquery-modal/jquery.modal.min.css");

            $output = $this->twig->processTemplate('partials/modal.html.twig', [
                'shortcode' => $sc,
            ]);

            return $output;
        });

        $this->shortcode->getHandlers()->add('modal-launch', function(ShortcodeInterface $sc) {
            $output = $this->twig->processTemplate('partials/modal-launch.html.twig', [
                'shortcode' => $sc,
            ]);

            return $output;
        });
    }
}
