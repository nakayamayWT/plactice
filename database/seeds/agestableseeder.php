<?php

use Illuminate\Database\Seeder;

class agestableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ages')->insert([
            [
                'age' => '10代以下',
            ],
            [
                'age' => '20代',
            ],
            [
                'age' => '30代',
            ],
            [
                'age' => '40代',
            ],
            [
                'age' => '50代',
            ],
            [
                'age' => '60代以上',
            ],
        ]);
    }
}
