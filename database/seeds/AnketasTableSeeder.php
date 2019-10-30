<?php

use Illuminate\Database\Seeder;

class AnketasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anketas')->insert([
            [
                'respondents_id' => '1',
                'phone' => 'Jā',
                'webserv' => 'Jā',
                'wifi' => 'Jā',
                'frequence' => 'katru dienu',
                'devices' => 'dators',
                'text' => 'delfi.lv',
                'robot'=>false,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ]);
    }
}
