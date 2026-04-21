<?php

/**
 * @since       15.02.20 - 21:40
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

use Contao\SelectMenu;

class SelectHandler
{
    /**
     * @param WidgetFactory $widgetFactory
     */
    public function __construct(private WidgetFactory $widgetFactory)
    {
    }

    /**
     * Erzeugt die einzelnen Auswahlfelder.
     *
     * @param string  $cssId
     * @param mixed[] $config
     * @param ?mixed  $value
     *
     * @return SelectMenu
     */
    public function createSelect(string $cssId, array $config, mixed $value = null): SelectMenu
    {
        $select         = $this->widgetFactory->createSelectMenu();
        $select->addAttributes($config);
        $select->name   = $cssId . '[]';
        $select->id     = $cssId;
        $select->class  = 'selectmenuwizard';

        if (!empty($value)) {
            $select->value = $value;
        }

        return $select;
    }
}
