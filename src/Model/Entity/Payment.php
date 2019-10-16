<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity
 *
 * @property int $id
 * @property int $bill_id
 * @property int $amount_paid
 * @property int $amount_outstanding
 *
 * @property \App\Model\Entity\Bill $bill
 */
class Payment extends Entity
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
        'bill_id' => true,
        'amount_paid' => true,
        'amount_outstanding' => true,
        'bill' => true
    ];
}
