<?php
namespace ApplicationTest\Selenium;

require_once(dirname(__FILE__) . '/../../../vendor/element-34/php-webdriver/PHPWebDriver/WebDriver.php');

/**
 * Class ElementsTest
 * @package ApplicationTest\Selenium
 */
class ExampleTest extends \PHPUnit_Framework_TestCase
{
    protected static $driver;

    protected $session;

    public function setUp() {
        self::$driver = new \PHPWebDriver_WebDriver();
        $this->session = self::$driver->session(); // firefox
    }

    public function tearDown() {
        $this->session->close();
    }

    /**
     * @group elements
     */
    public function testElementsExist() {
        $this->session->open("https://github.com/element-34/php-webdriver");
        $e = $this->session->elements('css selector', '.tabs li');
        $this->assertEquals(count($e), 7);
    }

    /**
     * @group elements
     */
    public function testElementsExist2() {
        $this->session->open("https://github.com/element-34/php-webdriver");
        $e = $this->session->elements('css selector', '.tabs li');
        $this->assertEquals(count($e), 7);
    }
}