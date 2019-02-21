<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PermissionMethod Entity
 *
 * @property int $id
 * @property int $permission_id
 * @property int $method_id
 *
 * @property \App\Model\Entity\Permission $permission
 * @property \App\Model\Entity\Method $method
 */
class PermissionMethod extends Entity
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
        'permission_id' => true,
        'method_id' => true,
        'permission' => true,
        'method' => true
    ];
}
