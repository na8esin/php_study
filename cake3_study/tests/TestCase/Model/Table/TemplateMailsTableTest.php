<?php

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TemplateMailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Exception;

/**
 * App\Model\Table\TemplateMailsTable Test Case
 */
class TemplateMailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TemplateMailsTable
     */
    public $TemplateMailsTable;

    /**
     * Fixtures
     *
     * @var array
     */
    /*
    public $fixtures = [
        'app.TemplateMails',
        'app.RouteTemplateMails'
    ];*/

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TemplateMails') ? [] : ['className' => TemplateMailsTable::class];
        $this->TemplateMailsTable = TableRegistry::getTableLocator()->get('TemplateMails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TemplateMailsTable);

        parent::tearDown();
    }

    public function testContain()
    {
        print('hoge');

        //throw new Exception('hogehoge');

        /*
        $array = $this->TemplateMailsTable
            ->find()->contain(['RouteTemplateMails'])->toArray();
*/
        try {
            var_dump($this->TemplateMailsTable->find());
        } catch (\Exception  $e) {
            throw $e;
        }
    }
}
