<?php

use Illuminate\Database\Seeder;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            ['img' =>"/images/img1.jpg",
            'des' =>"Why visit this place...." ,],
            ['img' =>"/images/img2.jpg",
            'des' =>"Why visit this place...." ,],
            ['img' =>"/images/img3.jpg",
            'des' =>"Why visit this place...." ,],
            ['img' =>"/images/img4.jpg",
            'des' =>"Why visit this place...." ,],
            ['img' =>"/images/img5.jpg",
            'des' =>"Why visit this place...." ,],
            ['img' =>"/images/img6.jpg",
            'des' =>"Why visit this place...." ,],
            ['img' =>"/images/img7.jpg",
            'des' =>"Why visit this place...." ,],
            ['img' =>"/images/img8.jpg",
            'des' =>"Why visit this place...." ,],
            ['img' =>"/images/img9.jpg",
            'des' =>"Why visit this place...." ,],
            ['img' =>"/images/img10.jpg",
            'des' =>"Why visit this place...." ,],
            ['img' =>"/images/img11.jpg",
            'des' =>"Why visit this place...." ,],
            ['img' =>"/images/img12.jpg",
            'des' =>"Why visit this place...." ,]

        ]);
    }
}
