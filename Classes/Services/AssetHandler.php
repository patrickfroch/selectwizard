<?php

/**
 * @since       15.02.20 - 21:32
 *
 * @author      Patrick Froch <info@easySolutionsIT.de>
 *
 * @see         http://easySolutionsIT.de
 *
 * @copyright   e@sy Solutions IT 2020
 * @license     LGPL-3.0-only
 */

declare(strict_types=1);

namespace Esit\Selectwizard\Classes\Services;

class AssetHandler
{
    /**
     * Fügt den $GLOBLAS von Contao die Assets (CSS|JS) hinzu.
     *
     * @param string $path
     * @param string $type
     */
    public function insertAsset(string $path, string $type): void
    {
        if (
            !empty($path) && !empty($type)
            && (
                !\array_key_exists($type, $GLOBALS)
                || !\is_array($GLOBALS[$type])
                || !\in_array($path, $GLOBALS[$type], true)
            )
        ) {
            $GLOBALS[$type][] = $path; // @phpstan-ignore offsetAccess.nonOffsetAccessible
        }
    }
}
