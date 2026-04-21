<?php

/**
 * @since       16.02.20 - 10:08
 *
 * @author      Patrick Froch <info@easySolutionsIT.de>
 *
 * @see         http://easySolutionsIT.de
 *
 * @copyright   e@sy Solutions IT 2020
 * @license     LGPL-3.0-only
 */

declare(strict_types=1);

namespace Esit\Selectwizard\Classes\Listener;

use Esit\Selectwizard\Classes\Events\OnGenerateWidgetEvent;
use Esit\Selectwizard\Classes\Services\AssetHandler;
use Esit\Selectwizard\Classes\Services\SelectHandler;
use Esit\Selectwizard\Classes\Services\TemplateFactory;

class OnGenerateWidgetListener
{
    /**
     * OnGenerateWidgetListener constructor.
     *
     * @param AssetHandler  $assetHandler
     * @param SelectHandler $selectHandler
     */
    public function __construct(
        private AssetHandler $assetHandler,
        private SelectHandler $selectHandler,
        private TemplateFactory $templateFactory
    ) {
    }


    /**
     * Fügt die Assets ein.
     *
     * @param OnGenerateWidgetEvent $event
     */
    public function insertCss(OnGenerateWidgetEvent $event): void
    {
        $css = $event->getTlCss();

        foreach ($css as $path) {
            $this->assetHandler->insertAsset($path, 'TL_CSS');
        }
    }


    /**
     * Fügt die Assets ein.
     *
     * @param OnGenerateWidgetEvent $event
     */
    public function insertJs(OnGenerateWidgetEvent $event): void
    {
        $js = $event->getTlJavascript();

        foreach ($js as $path) {
            $this->assetHandler->insertAsset($path, 'TL_JAVASCRIPT');
        }
    }


    /**
     * Erstellt das initiale Widget, wenn noch keine Werte vorhanden sind.
     *
     * @param OnGenerateWidgetEvent $event
     */
    public function generateWidgets(OnGenerateWidgetEvent $event): void
    {
        $selects    = $event->getSelects();
        $id         = $event->getFieldId();
        $config     = $event->getConfiguration();
        $values     = $event->getValues();

        if (!empty($values)) {
            foreach ($values as $value) {
                $selects[] = $this->selectHandler->createSelect($id, $config, $value);
            }
        } else {
            $selects[] = $this->selectHandler->createSelect($id, $config);
        }

        $event->setSelects($selects);
    }


    /**
     * Erstellt eine Instanz des Ausgabetemplates.
     *
     * @param OnGenerateWidgetEvent $event
     */
    public function createTemplate(OnGenerateWidgetEvent $event): void
    {
        $name = $event->getTemplateName();

        if (!empty($name)) {
            $template = $this->templateFactory->createBackendTemplate($name);
            $event->setTemplate($template);
        }
    }


    /**
     * Fügt dem Template die Daten hinzu.
     *
     * @param OnGenerateWidgetEvent $event
     */
    public function addDataToTemplate(OnGenerateWidgetEvent $event): void
    {
        $template = $event->getTemplate();

        if (null !== $template) {
            $template->setData($event->getConfiguration());
            $template->strId       = \str_replace('ctrl_', '', $event->getFieldId()) . '_list'; // @phpstan-ignore-line
            $template->label       = $event->getLabel();    // @phpstan-ignore-line
            $template->lang        = $event->getMscLang();  // @phpstan-ignore-line
            $template->selectBoxes = $event->getSelects();  // @phpstan-ignore-line
        }
    }


    /**
     * Erstellt den Inhalt des Widgets.
     *
     * @param OnGenerateWidgetEvent $event
     */
    public function parseOutput(OnGenerateWidgetEvent $event): void
    {
        $template = $event->getTemplate();

        if (null !== $template) {
            $event->setOutput($template->parse());
        }
    }
}
