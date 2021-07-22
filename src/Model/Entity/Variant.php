<?php
declare(strict_types=1);

namespace CakeCart\Model\Entity;

use Cake\ORM\Entity;

/**
 * Variant Entity
 *
 * @property int $id
 * @property string $name
 * @property int $quantity
 * @property int $unit_id
 * @property float $price
 * @property int $product_id
 * @property int $statuse_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \CakeCart\Model\Entity\Unit $unit
 * @property \CakeCart\Model\Entity\Product $product
 * @property \CakeCart\Model\Entity\Status $status
 * @property \CakeCart\Model\Entity\Variantimage[] $variantimages
 */
class Variant extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'quantity' => true,
        'unit_id' => true,
        'price' => true,
        'product_id' => true,
        'statuse_id' => true,
        'created' => true,
        'modified' => true,
        'unit' => true,
        'product' => true,
        'status' => true,
        'variantimages' => true,
    ];
}
