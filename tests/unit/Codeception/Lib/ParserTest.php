<?php
namespace Codeception\Lib;

class ParserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @group core
     * @throws \Codeception\Exception\TestParseException
     */
    public function testCeptValidation()
    {
        $this->setExpectedException('Codeception\Exception\TestParseException');
        Parser::validateAndLoad(codecept_data_dir('Invalid.php'));
    }

    /**
     * @group core
     * @throws \Codeception\Exception\TestParseException
     */
    public function testModernValidation()
    {
        $this->setExpectedException('Codeception\Exception\TestParseException');
        Parser::validateAndLoad(codecept_data_dir('Invalid.php'), true);
    }

    /**
     * @group core
     */
    public function testClassesFromFile()
    {
        $classes = Parser::getClassesFromFile(codecept_data_dir('DummyClass.php'));
        $this->assertContains('DummyClass', $classes);
        $classes = Parser::getClassesFromFile(codecept_data_dir('SimpleWithDependencyInjectionCest.php'));
        $this->assertContains('simpleDI\\LoadedTestWithDependencyInjectionCest', $classes);
        $this->assertContains('simpleDI\\AnotherCest', $classes);
    }

}