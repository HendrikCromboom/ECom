<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name'=>'some phone',
            'price'=>'200',
            'description'=>'smartphone NEW',
            'category'=>'mobile',
            'gallery'=>'https://lh3.googleusercontent.com/proxy/NgJfHRwQGTYbOtq9EOLyP0MKGqenwz1EU1WwULoD1schQZG7DbkU5P6ut2_JE__2nEDld5LoYi-VOyw8bz53sW9VJnEoBRCYVNwIajPgTOPVcXaIMAoaaCDSdRTijtQIIUU'
            ],
            [
                'name'=>'some phone',
                'price'=>'300',
                'description'=>'smartphone NEW',
                'category'=>'mobile',
                'gallery'=>'https://lh3.googleusercontent.com/proxy/NgJfHRwQGTYbOtq9EOLyP0MKGqenwz1EU1WwULoD1schQZG7DbkU5P6ut2_JE__2nEDld5LoYi-VOyw8bz53sW9VJnEoBRCYVNwIajPgTOPVcXaIMAoaaCDSdRTijtQIIUU'
            ],
            [
                'name'=>'some other phone',
                'price'=>'350',
                'description'=>'smartphone NEW',
                'category'=>'mobile',
                'gallery'=>'https://lh3.googleusercontent.com/proxy/NgJfHRwQGTYbOtq9EOLyP0MKGqenwz1EU1WwULoD1schQZG7DbkU5P6ut2_JE__2nEDld5LoYi-VOyw8bz53sW9VJnEoBRCYVNwIajPgTOPVcXaIMAoaaCDSdRTijtQIIUU'
            ],
            [
                'name'=>'other phone',
                'price'=>'400',
                'description'=>'smartphone NEW',
                'category'=>'mobile',
                'gallery'=>'https://lh3.googleusercontent.com/proxy/NgJfHRwQGTYbOtq9EOLyP0MKGqenwz1EU1WwULoD1schQZG7DbkU5P6ut2_JE__2nEDld5LoYi-VOyw8bz53sW9VJnEoBRCYVNwIajPgTOPVcXaIMAoaaCDSdRTijtQIIUU'
            ],
            [
                'name'=>'some other phone',
                'price'=>'500',
                'description'=>'smartphone NEW',
                'category'=>'mobile',
                'gallery'=>'https://lh3.googleusercontent.com/proxy/NgJfHRwQGTYbOtq9EOLyP0MKGqenwz1EU1WwULoD1schQZG7DbkU5P6ut2_JE__2nEDld5LoYi-VOyw8bz53sW9VJnEoBRCYVNwIajPgTOPVcXaIMAoaaCDSdRTijtQIIUU'
            ]

        ]);

    }
}
