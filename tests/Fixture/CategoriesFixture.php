<?php
declare(strict_types=1);

namespace CakeCart\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategoriesFixture
 */
class CategoriesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'biginteger', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'category_id' => ['type' => 'biginteger', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'level' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => 'level column contains end of categories level', 'precision' => null, 'autoIncrement' => null],
        'statuse_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => '2', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => 'CURRENT_TIMESTAMP', 'comment' => ''],
        'modified' => ['type' => 'timestamp', 'length' => null, 'precision' => null, 'null' => true, 'default' => 'CURRENT_TIMESTAMP', 'comment' => ''],
        '_indexes' => [
            'fk_categories_statuse_id' => ['type' => 'index', 'columns' => ['statuse_id'], 'length' => []],
            'fk_categories_category_id' => ['type' => 'index', 'columns' => ['category_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_categories_category_id' => ['type' => 'foreign', 'columns' => ['category_id'], 'references' => ['categories', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_categories_statuse_id' => ['type' => 'foreign', 'columns' => ['statuse_id'], 'references' => ['statuses', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'category_id' => 1,
                'level' => 1,
                'statuse_id' => 1,
                'created' => '2021-07-15 16:14:35',
                'modified' => 1626365675,
            ],
        ];
        parent::init();
    }
}
