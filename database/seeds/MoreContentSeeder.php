<?php

use Illuminate\Database\Seeder;

class MoreContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('morecontents')->insert([
            ['img' =>"/images/img1.jpg",
            'content' =>"aaaaaaaaaa" ,
            'contentdetail' =>"aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"],
            ['img' =>"/images/img2.jpg",
            'content' =>"bbbbbbbbbb" ,
            'contentdetail ' =>"bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb"],
            ['img' =>"/images/img3.jpg",
            'content' =>"cccccccccc" ,
            'contentdetail ' =>"cccccccccccccccccccccccccccccccccccccccccccc"],
            ['img' =>"/images/img4.jpg",
            'content' =>"dddddddddd" ,
            'contentdetail ' =>"dddddddddddddddddddddddddddddddddddddddddddd"],
            ['img' =>"/images/img5.jpg",
            'content' =>"eeeeeeeeee" ,
            'contentdetail ' =>"eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee"],
            ['img' =>"/images/img6.jpg",
            'content' =>"fffffffffff" ,
            'contentdetail ' =>"fffffffffffffffffffffffffffffffffffffffffff"],
            ['img' =>"/images/img7.jpg",
            'content' =>"gggggggggg" ,
            'contentdetail ' =>"gggggggggggggggggggggggggggggggggggggggggggg"],
            ['img' =>"/images/img8.jpg",
            'content' =>"hhhhhhhhhh" ,
            'contentdetail ' =>"hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh"],
            ['img' =>"/images/img9.jpg",
            'content' =>"iiiiiiiiii" ,
            'contentdetail ' =>"iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii"],
            ['img' =>"/images/img10.jpg",
            'content' =>"jjjjjjjjjj" ,
            'contentdetail ' =>"jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj"],
            ['img' =>"/images/img11.jpg",
            'content' =>"kkkkkkkkkk" ,
            'contentdetail ' =>"kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk"],
            ['img' =>"/images/img12.jpg",
            'content' =>"mmmmmmmmmmm" ,
            'contentdetail ' =>"mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm"],



        ]);
    }
}
