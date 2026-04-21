<?php

/**
 * @since       13.04.2023 - 16:07
 *
 * @author      Patrick Froch <info@easySolutionsIT.de>
 *
 * @see         http://easySolutionsIT.de
 *
 * @copyright   e@sy Solutions IT 2023
 * @license     LGPL-3.0-only
 */

declare(strict_types=1);

namespace Esit\Selectwizard\Classes\Services;

use Contao\BackendTemplate;

class TemplateFactory
{
    /**
     * Erstellt ein BackendTemplate.
     *
     * @param string $name
     *
     * @return BackendTemplate
     *
     * @codeCoverageIgnore
     */
    public function createBackendTemplate(string $name): BackendTemplate
    {
        return new BackendTemplate($name);
    }
}
