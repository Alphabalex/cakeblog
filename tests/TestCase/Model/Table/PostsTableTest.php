<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PostsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PostsTable Test Case
 */
class PostsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PostsTable
     */
    protected $Posts;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Posts',
        'app.Users',
        'app.Categories',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Posts') ? [] : ['className' => PostsTable::class];
        $this->Posts = $this->getTableLocator()->get('Posts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Posts);

        parent::tearDown();
    }

    /**
     * Test beforeSave method
     *
     * @return void
     */
    public function testBeforeSave(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
