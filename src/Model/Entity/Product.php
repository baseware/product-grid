<?php
declare(strict_types=1);

namespace CakeCart\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $image
 * @property string $description
 * @property int $quantity
 * @property float $price
 * @property int $sequence
 * @property int $statuse_id
 * @property int|null $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \CakeCart\Model\Entity\Status $status
 * @property \CakeCart\Model\Entity\User $user
 * @property \CakeCart\Model\Entity\Variant[] $variants
 */
class Product extends Entity
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
        'image' => true,
        'description' => true,
        'quantity' => true,
        'price' => true,
        'sequence' => true,
        'statuse_id' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'status' => true,
        'user' => true,
        'variants' => true,
    ];
    private $thumbnail= "https://projects.baseware.in/img/products/thumbnails/";
    private $full = "https://projects.baseware.in/img/products/"; 
   
    protected function _getImageThumbnail()
    {
        if(!empty($this->image)){
         return $this->thumbnail.$this->image;
        }
        return $this->image;
    }
    
    protected function _getImageFull()
    {
        if(!empty($this->image)){
         return $this->full.$this->image;
        }
        return $this->image;
    }
    
}
