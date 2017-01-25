<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AcademicTeacher Entity
 *
 * @property int $ID
 * @property string $name
 * @property string $surname
 * @property int $national_identification_number
 * @property string $occupation
 * @property string $degree
 * @property string $department
 *
 * @property \App\Model\Entity\Evaluation[] $evaluations
 */
class AcademicTeacher extends Entity
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
