<?php

use Illuminate\Database\Seeder;
use App\placename;

class PlaceNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('placename_tables')->insert([
    //         ['cid' => '4',
    //         'did' => '2',
    //         'img' => '/images/colonial.jpg',
    //        'placeName' => 'Calonial House',
    //     'placename_lat' => '0000',
    // 'placename_long' => '0000'],

    //         ['cid' => '3',
    //         'did' => '2',
    //         'img' => '/images/dattawgyaik.jpg',
    //         'placeName' => 'Dattawgyaik Waterfall',
    //         'placename_lat' => '51.854940',
    //         'placename_long' => '-8.554070'],

            // ['cid' => '3',
            // 'did' => '2',
            // 'img' => '/images/deedoke.jpg',
            // 'placeName' => 'Deedoke Waterfall',
            // 'placename_lat' => '51.834923',
            // 'placename_long' => '-8.628389'],

            // ['cid' => '2',
            // 'did' => '2',
            // 'img' => '/images/bagan.jpg',
            // 'placeName' => 'Bagan Pagodas',
            // 'placename_lat' => '21.171726',
            // 'placename_long' => '94.858543'],

            // ['cid' => '2',
            // 'did' => '2',
            // 'img' => '/images/kuthodaw.jpg',
            // 'placeName' => 'Kuthodaw Pagoda',
            // 'placename_lat' => '-3.697030',
            // 'placename_long' => '138.339910'],

            // ['cid' => '2',
            // 'did' => '2',
            // 'img' => '/images/kyauktawgyi.jpg',
            // 'placeName' => 'Kyauktawgyi Pagoda',
            // 'placename_lat' => '-3.697030',
            // 'placename_long' => '138.339910'],

            // ['cid' => '4',
            // 'did' => '2',
            // 'img' => '/images/maharwaiyanbonthar.jpg',
            // 'placeName' => 'Mahar Wai Yan Bon Thar Monestry',
            // 'placename_lat' => '13.649610',
            // 'placename_long' => '100.363270'],

            // ['cid' => '2',
            // 'did' => '2',
            // 'img' => '/images/maharanthtookanthar.jpg',
            // 'placeName' => 'Mahar Ant Htoo Kan Thar Pagoda',
            // 'placename_lat' => '16.835160',
            // 'placename_long' => '96.130620'],

            // ['cid' => '2',
            // 'did' => '2',
            // 'img' => '/images/maharmyatmuni.jpg',
            // 'placeName' => 'Mahar Myat Muni Pagoda',
            // 'placename_lat' => '19.724680',
            // 'placename_long' => '96.068800'],

            // ['cid' => '4',
            // 'did' => '2',
            // 'img' => '/images/mandalayhill.jpg',
            // 'placeName' => 'Mandalay Hill',
            // 'placename_lat' => '22.012630',
            // 'placename_long' => '96.108452'],

            // ['cid' => '2',
            // 'did' => '4',
            // 'img' => '/images/mingun.jpg',
            // 'placeName' => 'Mingun Pagoda',
            // 'placename_lat' => '-3.697030',
            // 'placename_long' => '138.339910'],

            // ['cid' => '2',
            // 'did' => '2',
            // 'img' => '/images/myatheintan.jpg',
            // 'placeName' => 'Mya Thein Tan Pagoda',
            // 'placename_lat' => '16.870280',
            // 'placename_long' => '96.055880'],

            // ['cid' => '4',
            // 'did' => '2',
            // 'img' => '/images/palace.jpg',
            // 'placeName' => 'Mandalay Palace',
            // 'placename_lat' => '-31.790440',
            // 'placename_long' => '115.764664'],

            // ['cid' => '2',
            // 'did' => '2',
            // 'img' => '/images/patotawgyi.jpg',
            // 'placeName' => 'Patotawgyi pagoda',
            // 'placename_lat' => '-3.697030',
            // 'placename_long' => '138.339910'],

            // ['cid' => '3',
            // 'did' => '2',
            // 'img' => '/images/peikchinmyaung.jpg',
            // 'placeName' => 'Peik Chin Myaung Cave',
            // 'placename_lat' => '46.187690',
            // 'placename_long' => '-62.859330'],

            // ['cid' => '4',
            // 'did' => '2',
            // 'img' => '/images/popa.jpg',
            // 'placeName' => 'Popa Mountain',
            // 'placename_lat' => '35.402630',
            // 'placename_long' => '-93.022369'],

            // ['cid' => '3',
            // 'did' => '2',
            // 'img' => '/images/pwekauk.jpg',
            // 'placeName' => 'Pwekauk Waterfall',
            // 'placename_lat' => '51.854940',
            // 'placename_long' => '-8.554070'],

            // ['cid' => '3',
            // 'did' => '2',
            // 'img' => '/images/pyinoolwin.jpg',
            // 'placeName' => 'National Kandawgyi Botanical Garden',
            // 'placename_lat' => '-33.985670',
            // 'placename_long' => '18.432400'],

            // ['cid' => '2',
            // 'did' => '2',
            // 'img' => '/images/sandamuni.jpg',
            // 'placeName' => 'Sandamuni Pagoda',
            // 'placename_lat' => '-3.697030',
            // 'placename_long' => '138.339910'],

            // ['cid' => '4',
            // 'did' => '2',
            // 'img' => '/images/shweinbin.jpg',
            // 'placeName' => 'Shweinbin Monestry',
            // 'placename_lat' => '42.908110',
            // 'placename_long' => '-88.030130'],

            // ['cid' => '4',
            // 'did' => '2',
            // 'img' => '/images/shwenantaw.jpg',
            // 'placeName' => 'Shwenantaw Monestry',
            // 'placename_lat' => '42.908110',
            // 'placename_long' => '-88.030130'],

            // ['cid' => '2',
            // 'did' => '2',
            // 'img' => '/images/sutaungpyae.jpg',
            // 'placeName' => 'Su taung Pyae Pagoda',
            // 'placename_lat' => '16.790110',
            // 'placename_long' => '96.141170'],

            // ['cid' => '3',
            // 'did' => '2',
            // 'img' => '/images/ubeinbridge.jpg',
            // 'placeName' => 'U Bein Bridge',
            // 'placename_lat' => '50.010040',
            // 'placename_long' => '8.042900'],


            // ['cid' => '4',
            // 'did' => '2',
            // 'img' => '/images/yankin.jpg',
            // 'placeName' => 'Yankin Hill',
            // 'placename_lat' => '32.353680',
            // 'placename_long' => '-96.827940'],

            // ['cid' => '4',
            // 'did' => '2',
            // 'img' => '/images/zaycho.jpg',
            // 'placeName' => 'Zaycho Market',
            // 'placename_lat' => '52.477960',
            // 'placename_long' => '-0.921030'],

            // ['cid' => '2',
            // 'did' => '2',
            // 'img' => '/images/jade.jpg',
            // 'placeName' => 'Jade Pagoda',
            // 'placename_lat' => '29.063133',
            // 'placename_long' => '-82.066246'],

            // ['cid' => '2',
            // 'did' => '2',
            // 'img' => '/images/kaunghmutawmandalay.jpg',
            // 'placeName' => 'Kaungmutaw Pagoda',
            // 'placename_lat' => '-3.697030',
            // 'placename_long' => '138.339910'],

            // ['cid' => '4',
            // 'did' => '2',
            // 'img' => '/images/delete.jpg',
            // 'placeName' => 'AAAAAAAAAAAAAAAAAAAAAAAAA',
            // 'placename_lat' => '0',
            // 'placename_long' => '0'],

            // ['cid' => '4',
            // 'did' => '2',
            // 'img' => '/images/delete.jpg',
            // 'placeName' => 'AAAAAAAAAAAAAAAAAAAAAAAAA',
            // 'placename_lat' => '0',
            // 'placename_long' => '0'],


            // ['cid' => '4',
            // 'did' => '2',
            // 'img' => '/images/delete.jpg',
            // 'placeName' => 'AAAAAAAAAAAAAAAAAAAAAAAAA',
            // 'placename_lat' => '0',
            // 'placename_long' => '0'],

            // ['cid' => '4',
            // 'did' => '2',
            // 'img' => '/images/delete.jpg',
            // 'placeName' => 'AAAAAAAAAAAAAAAAAAAAAAAAA',
            // 'placename_lat' => '0',
            // 'placename_long' => '0']

            ['cid' => '2',
            'did' => '1',
            'img' => '/images/delete.jpg',
            'placeName' => 'Shweadagon Pagoda',
            'placename_lat' => '16.771840',
            'placename_long' => '96.153070']




        ]);
    }
}
