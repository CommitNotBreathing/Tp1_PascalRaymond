<?php
use Migrations\AbstractSeed;

/**
 * Files seed.
 */
class FilesSeed extends AbstractSeed
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
                'id' => '2',
                'name' => 'enfant1.jpg',
                'path' => 'Files/',
                'created' => '2019-10-15 16:55:36',
                'modified' => '2019-10-15 16:55:36',
                'status' => '1',
            ],
            [
                'id' => '3',
                'name' => 'enfant2.jpg',
                'path' => 'Files/',
                'created' => '2019-10-15 20:28:47',
                'modified' => '2019-10-15 20:28:47',
                'status' => '0',
            ],
        ];

        $table = $this->table('files');
        $table->insert($data)->save();
    }
}
