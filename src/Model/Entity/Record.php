<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Record Entity
 *
 * @property string|null $record_name
 * @property string|null $artist
 * @property string|null $year
 * @property string|null $genre
 * @property string|null $number_of_disks
 * @property int $record_id
 */
class Record extends Entity
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
        'record_name' => true,
        'artist' => true,
        'year' => true,
        'genre' => true,
        'number_of_disks' => true,
    ];
}
