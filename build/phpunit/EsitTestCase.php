<?php declare(strict_types=1);
/**
 * @author      pfroch <info@easySolutionsIT.de>
 * @link        http://easySolutionsIT.de
 * @copyright   e@sy Solutions IT 2022
 * @package     Selectwizard
 * @since       22.09.2022 - 20.50
 */
namespace Esit\Selectwizard;

use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\TestCase\ContaoTestCase;
use PHPUnit\Framework\MockObject\MockObject;

/**
 * Class EsitTestCase
 */
class EsitTestCase extends ContaoTestCase
{


    /**
     * File with data.
     * @var string
     */
    protected $strDataProviderFile = '';


    /**
     * DataProvider
     * @var null
     */
    protected $varDataProvider = null;


    /**
     * @var ContaoFramework&MockObject
     */
    protected $framework;


    /**
     * @param $name
     * @param array $data
     * @param $dataName
     * @throws \Exception
     */
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->initializeContao();
    }


    /**
     * setup the environment
     */
    protected function setUp(): void
    {
    }


    /**
     * tear down the environment
     */
    protected function tearDown(): void
    {
    }


    /**
     * Initialisiert Contao
     * @param string $tlMode
     * @param string $tlScript
     * @throws \Exception
     */
    protected function initializeContao($tlMode = 'TEST', $tlScript = 'EsitTestCase'): void
    {
        $this->framework = $this->mockContaoFramework();
        $this->framework->method('initialize');

        if (!defined('TL_MODE')) {
            define('TL_MODE', $tlMode);
            define('TL_SCRIPT', $tlScript);
            $initializePath = CONTAO_ROOT . "/system/initialize.php";

            if (is_file($initializePath)) {
                require($initializePath);
                stream_wrapper_restore('phar');// reregister stream wrapper for phpunit.phar
            }
        }
    }
}
