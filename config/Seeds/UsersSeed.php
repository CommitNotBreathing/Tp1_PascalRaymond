<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'id' => '123123',
                'first_name' => 'Pascal',
                'last_name' => 'Raymond',
                'address' => '123 rue des tests',
                'city' => 'Laval',
                'password' => '$2y$10$geyRZAs8B6wamGpZR.9ZL.UhKqaDAx0OxurBwLLAMVx3c9X/0WFTK',
                'email' => 'admin@admin.com',
                'type' => 'admin',
                'verifié' => '1',
            ],
            [
                'id' => '123456',
                'first_name' => 'Madame',
                'last_name' => 'Test',
                'address' => '456 boul Testing',
                'city' => 'Montreal',
                'password' => 'admin123',
                'email' => 'madame@gmail.com',
                'type' => 'super-utilisateur',
                'verifié' => '1',
            ],
            [
                'id' => '123457',
                'first_name' => 'testeur',
                'last_name' => 'testeur',
                'address' => '13245ysdfsd',
                'city' => 'dasfafnaj',
                'password' => '$2y$10$WxtGHrTGbliI9wHEgBk65uae249jZZSG1yelZBRtsvcb9p/SAXdtm',
                'email' => 'test@test.com',
                'type' => 'super-utilisateur',
                'verifié' => '0',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
