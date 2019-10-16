<?php
use Migrations\AbstractSeed;

/**
 * Childrens seed.
 */
class ChildrensSeed extends AbstractSeed
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
                'id' => '147',
                'user_id' => '123123',
                'gender' => 'M',
                'first_name' => 'bob',
                'last_name' => 'Raymond',
                'age' => '12',
                'image_id' => '2',
            ],
            [
                'id' => '789',
                'user_id' => '123456',
                'gender' => 'F',
                'first_name' => 'billy',
                'last_name' => 'Robert',
                'age' => '10',
                'image_id' => '3',
            ],
        ];

        $table = $this->table('childrens');
        $table->insert($data)->save();
    }
}
