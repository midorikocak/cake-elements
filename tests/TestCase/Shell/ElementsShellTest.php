<?php
namespace CakeElements\Test\TestCase\Shell;

use CakeElements\Shell\ElementsShell;
use Cake\TestSuite\TestCase;

/**
 * CakeElements\Shell\ElementsShell Test Case
 */
class ElementsShellTest extends TestCase
{

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->io = $this->getMock('Cake\Console\ConsoleIo');
        $this->Elements = new ElementsShell($this->io);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Elements);

        parent::tearDown();
    }

    /**
     * Test main method
     *
     * @return void
     */
    public function testMain()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
