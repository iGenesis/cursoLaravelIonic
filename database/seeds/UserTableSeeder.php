<?php

use Illuminate\Database\Seeder;
use CodeDelivery\Models\Client;
use CodeDelivery\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create()->each(function ($u) {
            $u->client()->saveMany(factory(Client::class)->times(5)->make());
        });
    }
}
