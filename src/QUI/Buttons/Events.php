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
    public static function onTemplateGetHeader($Template)
    {
        $Template->extendHeaderWithCSSFile(URL_OPT_DIR .'quiqqer/buttons/bin/buttons.css');
    }
}
