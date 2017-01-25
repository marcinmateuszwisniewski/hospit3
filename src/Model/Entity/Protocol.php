<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Protocol Entity
 *
 * @property int $ID
 * @property bool $discussed
 * @property \Cake\I18n\Time $discussion_day
 * @property \Cake\I18n\Time $commital_day
 * @property \Cake\I18n\Time $evaluation_day
 * @property int $hour
 */
class Protocol extends Entity
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
