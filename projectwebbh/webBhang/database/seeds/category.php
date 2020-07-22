<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class category extends Seeder
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
         'ca_name'=>'iphone',
         'ca_slug'=>str::slug('iphone')
          ],
           [
         'ca_name'=>'samsung',
         'ca_slug'=>str::slug('samsung')
          ]
        ];
        DB::table('category')->insert($data);
    }
}
