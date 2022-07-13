<?php

namespace Database\Seeders;

use App\Models\Invited;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InvitedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //call factory
        Invited::factory()->count(10)->create();
    }
}
