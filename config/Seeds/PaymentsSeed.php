<?php
use Migrations\AbstractSeed;

/**
 * Payments seed.
 */
class PaymentsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '753',
                'bill_id' => '852',
                'amount_paid' => '0',
                'amount_outstanding' => '150',
            ],
            [
                'id' => '951',
                'bill_id' => '852',
                'amount_paid' => '75',
                'amount_outstanding' => '25',
            ],
        ];

        $table = $this->table('payments');
        $table->insert($data)->save();
    }
}
