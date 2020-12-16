<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'oppo',
           'price'=>'300$',
           'description'=>'chinese smartphone',
           'category'=>'mobile phones',
           'gallery'=>'https://fdn2.gsmarena.com/vv/pics/oppo/oppo-reno2-1.jpg'
            ],
            [
                'name'=>'LG smart TV',
               'price'=>'3000$',
               'description'=>' smart tv',
               'category'=>'TV',
               'gallery'=>'https://image.shutterstock.com/image-photo/television-mock-260nw-1239314695.jpg'
            ],
            [
                'name'=>'iphone 12 pro',
               'price'=>'1000$',
               'description'=>' Apple smart phone',
               'category'=>'mobile',
               'gallery'=>'https://cdn.dxomark.com/wp-content/uploads/medias/post-61584/iphone-12-pro-max-graphite-hero.jpg'
                ]
    
        ]
    );
    }
}
