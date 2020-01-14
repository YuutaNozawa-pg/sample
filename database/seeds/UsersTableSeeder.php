<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new User())->newQuery()
            ->create([
                'name' => 'sample',
                'email' => 'sample',
                'password' => 'sample'
            ]);
    }
}
