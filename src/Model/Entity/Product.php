<?php
namespace Solidus\Model\Entity;

use Cake\I18n\FrozenTime;
use Cake\ORM\Entity;

/**
 * SpreeProduct Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property FrozenTime $available_on
 * @property FrozenTime $deleted_at
 * @property string $slug
 * @property string $meta_description
 * @property string $meta_keywords
 * @property int $tax_category_id
 * @property int $shipping_category_id
 * @property FrozenTime $created_at
 * @property FrozenTime $updated_at
 * @property bool $promotionable
 * @property string $meta_title
 *
 * @property TaxCategory $tax_category
 * @property ShippingCategory $shipping_category
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
        'description' => true,
        'available_on' => true,
        'deleted_at' => true,
        'slug' => true,
        'meta_description' => true,
        'meta_keywords' => true,
        'tax_category_id' => true,
        'shipping_category_id' => true,
        'created_at' => true,
        'updated_at' => true,
        'promotionable' => true,
        'meta_title' => true,
        'tax_category' => true,
        'shipping_category' => true
    ];
}
