<?php

use Illuminate\Database\Seeder;

class seeduser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
           [
           	'name'=>'Pham Duc Nhat',
            'email'=>'nhatpdtc@gmail.com',
            'password'=>bcrypt('12345678'),
            'level'=>1
           ],
            [
            'name'=>'Pham Duc Nhat',
            'email'=>'hoangpdtc@gmail.com',
            'password'=>bcrypt('123477678'),
            'level'=>0
           ]
        ];
        DB::table('users')->insert($data);
    }
}
