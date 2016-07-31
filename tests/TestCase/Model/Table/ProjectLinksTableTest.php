<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjectLinksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjectLinksTable Test Case
 */
class ProjectLinksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjectLinksTable
     */
    public $ProjectLinks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.project_links',
        'app.projects',
        'app.links'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProjectLinks') ? [] : ['className' => 'App\Model\Table\ProjectLinksTable'];
        $this->ProjectLinks = TableRegistry::get('ProjectLinks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProjectLinks);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
