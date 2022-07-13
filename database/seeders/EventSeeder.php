<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $response = [
            'going', 'maybe', 'not_going'
        ];
        foreach ($response as $key => $value) {
            \App\Models\Response::updateOrCreate(
                ['name' => $value],
                ['name' => $value]
            );
        }
    }
}
