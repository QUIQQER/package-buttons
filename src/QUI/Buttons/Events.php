<?php

/**
 * This file contains \QUI\Buttons\Events
 */

namespace QUI\Buttons;

/**
 * Event handling
 *
 * @author www.pcsg.de (Henning Leutz)
 */
class Events
{
    /**
     * Called when a template header is loaded.
     * Extends the header with the CSS button styles.
     *
     * @param \QUI\Template $Template
     */
    public static function onTemplateGetHeader(\QUI\Template $Template)
    {
        $Template->extendHeaderWithCSSFile(URL_OPT_DIR . 'quiqqer/buttons/bin/buttons.css');
    }
}
