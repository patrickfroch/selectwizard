<?php

/**
 * @since       14.02.2020 - 10:26
 *
 * @author      Patrick Froch <info@easySolutionsIT.de>
 *
 * @see         http://easySolutionsIT.de
 *
 * @copyright   e@sy Solutions IT 2020
 * @license     LGPL-3.0-only
 */

declare(strict_types=1);

namespace Esit\Selectwizard\Classes\Events;

use Contao\BackendTemplate;
use Contao\SelectMenu;
use Symfony\Contracts\EventDispatcher\Event;

class OnGenerateWidgetEvent extends Event
{
    /**
     * Liste der CSS-Dateien
     *
     * @var string[]
     */
    protected array $tlCss = [];


    /**
     * Liste der JavaScript-Dateien
     *
     * @var string[]
     */
    protected array $tlJavascript = [];


    /**
     * Id über die das Feld angesprochen werden kann
     *
     * @var string
     */
    protected string $fieldId = '';


    /**
     * Label für das Widget
     *
     * @var string
     */
    protected string $label = '';


    /**
     * Werte des Eingabefelds
     *
     * @var mixed[]
     */
    protected array $values = [];


    /**
     * Konfiguration des Widgets
     *
     * @var string[]
     */
    protected array $configuration = [];


    /**
     * Sprachdatei für die Übersetzung
     *
     * @var mixed[]
     */
    protected array $mscLang = [];


    /**
     * Array mit den einzelnen Widgets der Auswahlfelder
     *
     * @var SelectMenu[]
     */
    protected array $selects = [];


    /**
     * Name des Widget-Templates
     *
     * @var string
     */
    protected string $templateName = '';


    /**
     * Template-Objekt
     *
     * @var ?BackendTemplate
     */
    protected ?BackendTemplate $template = null;


    /**
     * Output des Widgets
     *
     * @var string
     */
    protected string $output = '';


    /**
     * @return string[]
     */
    public function getTlCss(): array
    {
        return $this->tlCss;
    }


    /**
     * @param string[] $tlCss
     */
    public function setTlCss(array $tlCss): void
    {
        $this->tlCss = $tlCss;
    }


    /**
     * @return string[]
     */
    public function getTlJavascript(): array
    {
        return $this->tlJavascript;
    }


    /**
     * @param string[] $tlJavascript
     */
    public function setTlJavascript(array $tlJavascript): void
    {
        $this->tlJavascript = $tlJavascript;
    }


    /**
     * @return string
     */
    public function getFieldId(): string
    {
        return $this->fieldId;
    }


    /**
     * @param string $fieldId
     */
    public function setFieldId(string $fieldId): void
    {
        $this->fieldId = $fieldId;
    }


    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }


    /**
     * @param string $label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }


    /**
     * @return mixed[]
     */
    public function getValues(): array
    {
        return $this->values;
    }


    /**
     * @param mixed[] $values
     */
    public function setValues(array $values): void
    {
        $this->values = $values;
    }


    /**
     * @return string[]
     */
    public function getConfiguration(): array
    {
        return $this->configuration;
    }


    /**
     * @param string[] $configuration
     */
    public function setConfiguration(array $configuration): void
    {
        $this->configuration = $configuration;
    }


    /**
     * @return mixed[]
     */
    public function getMscLang(): array
    {
        return $this->mscLang;
    }


    /**
     * @param mixed[] $mscLang
     */
    public function setMscLang(array $mscLang): void
    {
        $this->mscLang = $mscLang;
    }


    /**
     * @return SelectMenu[]
     */
    public function getSelects(): array
    {
        return $this->selects;
    }


    /**
     * @param SelectMenu[] $selects
     */
    public function setSelects(array $selects): void
    {
        $this->selects = $selects;
    }


    /**
     * @return string
     */
    public function getTemplateName(): string
    {
        return $this->templateName;
    }


    /**
     * @param string $templateName
     */
    public function setTemplateName(string $templateName): void
    {
        $this->templateName = $templateName;
    }


    /**
     * @return BackendTemplate|null
     */
    public function getTemplate(): ?BackendTemplate
    {
        return $this->template;
    }


    /**
     * @param BackendTemplate $template
     */
    public function setTemplate(BackendTemplate $template): void
    {
        $this->template = $template;
    }


    /**
     * @return string
     */
    public function getOutput(): string
    {
        return $this->output;
    }


    /**
     * @param string $output
     */
    public function setOutput(string $output): void
    {
        $this->output = $output;
    }
}
