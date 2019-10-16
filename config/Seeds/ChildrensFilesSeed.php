<?php
use Migrations\AbstractSeed;

/**
 * ChildrensFiles seed.
 */
class ChildrensFilesSeed extends AbstractSeed
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
                'id' => '1',
                'image_id' => '2',
                'file_id' => '2',
            ],
        ];

        $table = $this->table('childrens_files');
        $table->insert($data)->save();
    }
}
