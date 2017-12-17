<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data= array(
        [
        'name'=>'Jeep',
        'slug' =>'Jeep',
        'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut facilisis urna, ut aliquam nibh.',
        'color'=>'#440022'
        ],
        [
            'name'=>'Ford',
            'slug' =>'Ford',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'color'=>'#445500'
        ]
    );

       Category::insert($data);
    }
}