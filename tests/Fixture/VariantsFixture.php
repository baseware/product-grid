<?php
declare(strict_types=1);

namespace CakeCart\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VariantsFixture
 */
class VariantsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'biginteger', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'quantity' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'uint_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'price' => ['type' => 'float', 'length' => 8, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'product_id' => ['type' => 'biginteger', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'statuse_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'precision' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => ''],
        'modified' => ['type' => 'timestamp', 'length' => null, 'precision' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => ''],
        '_indexes' => [
            'fk_variants_unit_id' => ['type' => 'index', 'columns' => ['uint_id'], 'length' => []],
            'fk_variants_product_id' => ['type' => 'index', 'columns' => ['product_id'], 'length' => []],
            'fk_variants_statuse_id' => ['type' => 'index', 'columns' => ['statuse_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_variants_product_id' => ['type' => 'foreign', 'columns' => ['product_id'], 'references' => ['products', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_variants_statuse_id' => ['type' => 'foreign', 'columns' => ['statuse_id'], 'references' => ['statuses', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_variants_unit_id' => ['type' => 'foreign', 'columns' => ['uint_id'], 'references' => ['units', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
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
                'quantity' => 1,
                'uint_id' => 1,
                'price' => 1,
                'product_id' => 1,
                'statuse_id' => 1,
                'created' => 1626416194,
                'modified' => 1626416194,
            ],
        ];
        parent::init();
    }
}
