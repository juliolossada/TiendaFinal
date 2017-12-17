<?php
use Illuminate\Database\Seeder;
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
        $data = array(
            [
                'name' => 'jeep', 
                'slug' => 'jeep', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
                'color' => '#440022'
            ],
            [
                'name' => 'ford', 
                'slug' => 'ford', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
                'color' => '#445500'
            ]
        );
        Category::insert($data);
    }
}