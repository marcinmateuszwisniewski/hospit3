<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property int $ID
 * @property string $code
 * @property string $room
 * @property string $start_hour
 * @property bool $start_day
 * @property string $start_hour_2
 * @property bool $start_day_2
 * @property string $name
 * @property string $type
 *
 * @property \App\Model\Entity\Schedule[] $schedules
 */
class Course extends Entity
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
        '*' => true,
        'ID' => false
    ];
}
