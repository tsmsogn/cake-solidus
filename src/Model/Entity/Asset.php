<?php
namespace Solidus\Model\Entity;

use Cake\I18n\FrozenTime;
use Cake\ORM\Entity;
use Solidus\Model\Entity\Viewable;

/**
 * SpreeAsset Entity
 *
 * @property int $id
 * @property string $viewable_type
 * @property int $viewable_id
 * @property int $attachment_width
 * @property int $attachment_height
 * @property int $attachment_file_size
 * @property int $position
 * @property string $attachment_content_type
 * @property string $attachment_file_name
 * @property string $type
 * @property FrozenTime $attachment_updated_at
 * @property string $alt
 * @property FrozenTime $created_at
 * @property FrozenTime $updated_at
 *
 * @property Viewable $viewable
 */
class Asset extends Entity
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
        'viewable_type' => true,
        'viewable_id' => true,
        'attachment_width' => true,
        'attachment_height' => true,
        'attachment_file_size' => true,
        'position' => true,
        'attachment_content_type' => true,
        'attachment_file_name' => true,
        'type' => true,
        'attachment_updated_at' => true,
        'alt' => true,
        'created_at' => true,
        'updated_at' => true,
        'viewable' => true
    ];
}
