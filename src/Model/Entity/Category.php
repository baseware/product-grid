<?php
declare(strict_types=1);

namespace CakeCart\Model\Entity;

use Cake\ORM\Entity;

/**
 * Category Entity
 *
 * @property int $id
 * @property string $name
 * @property int|null $category_id
 * @property int|null $level
 * @property int $statuse_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \CakeCart\Model\Entity\Category[] $categories
 * @property \CakeCart\Model\Entity\Status $status
 */
class Category extends Entity
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
        'id' => true,
        'name' => true,
        'category_id' => true,
        'level' => true,
        'statuse_id' => true,
        'created' => true,
        'modified' => true,
        'categories' => true,
        'status' => true,
    ];
}
