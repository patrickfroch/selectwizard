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

namespace Esit\Selectwizard\Classes\Contao\Manager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Config\ConfigInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Esit\Selectwizard\EsitSelectwizardBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * @param ParserInterface $parser
     *
     * @return array|ConfigInterface[]
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [BundleConfig::create(EsitSelectwizardBundle::class)->setLoadAfter([ContaoCoreBundle::class])];
    }
}
