<?php
use Migrations\AbstractSeed;

/**
 * Bills seed.
 */
class BillsSeed extends AbstractSeed
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
                'id' => '852',
                'ref_bill_status_id' => '12',
                'user_id' => '123456',
                'amount_due' => '100',
                'amount_outstanding' => '75',
            ],
            [
                'id' => '789456',
                'ref_bill_status_id' => '12',
                'user_id' => '123123',
                'amount_due' => '150',
                'amount_outstanding' => '150',
            ],
        ];

        $table = $this->table('bills');
        $table->insert($data)->save();
    }
}
