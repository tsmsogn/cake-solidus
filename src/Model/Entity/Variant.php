<?php
namespace Solidus\Model\Entity;

use Cake\I18n\FrozenTime;
use Cake\ORM\Entity;

/**
 * Variant Entity
 *
 * @property int $id
 * @property string $sku
 * @property float $weight
 * @property float $height
 * @property float $width
 * @property float $depth
 * @property FrozenTime $deleted_at
 * @property bool $is_master
 * @property int $product_id
 * @property float $cost_price
 * @property int $position
 * @property string $cost_currency
 * @property bool $track_inventory
 * @property int $tax_category_id
 * @property FrozenTime $updated_at
 * @property FrozenTime $created_at
 *
 * @property Product $product
 * @property TaxCategory $tax_category
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
        'sku' => true,
        'weight' => true,
        'height' => true,
        'width' => true,
        'depth' => true,
        'deleted_at' => true,
        'is_master' => true,
        'product_id' => true,
        'cost_price' => true,
        'position' => true,
        'cost_currency' => true,
        'track_inventory' => true,
        'tax_category_id' => true,
        'updated_at' => true,
        'created_at' => true,
        'product' => true,
        'tax_category' => true
    ];
}
