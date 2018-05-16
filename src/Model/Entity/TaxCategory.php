<?php
namespace Solidus\Model\Entity;

use Cake\I18n\FrozenTime;
use Cake\ORM\Entity;

/**
 * SpreeTaxCategory Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property bool $is_default
 * @property FrozenTime $deleted_at
 * @property FrozenTime $created_at
 * @property FrozenTime $updated_at
 * @property string $tax_code
 */
class TaxCategory extends Entity
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
        'is_default' => true,
        'deleted_at' => true,
        'created_at' => true,
        'updated_at' => true,
        'tax_code' => true
    ];
}
