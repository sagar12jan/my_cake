<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity.
 */
class Users extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'FirstName' => true,
        'LastName' => true,
        'Email'=> true,
        'Mobile'=> true,
        'City'=> true,
    ];
}
