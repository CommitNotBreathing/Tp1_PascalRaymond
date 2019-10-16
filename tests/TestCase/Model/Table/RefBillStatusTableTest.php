<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RefBillStatusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RefBillStatusTable Test Case
 */
class RefBillStatusTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RefBillStatusTable
     */
    public $RefBillStatus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.RefBillStatus',
        'app.Bills'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RefBillStatus') ? [] : ['className' => RefBillStatusTable::class];
        $this->RefBillStatus = TableRegistry::getTableLocator()->get('RefBillStatus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RefBillStatus);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
