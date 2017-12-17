<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;
class ProductTableSeeder extends Seeder
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
            'name' =>'Repuesto-1',
            'slug' =>'Repuesto-1',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut facilisis urna, ut aliquam nibh.',
            'extract'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price'=>'300.00',
            'image'=>'https://http2.mlstatic.com/alternador-jeep-liberty-commander-grand-cherokee-2002-2007-D_NQ_NP_226101-MLV20281786495_042015-F.jpg',
            'visible'=>1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime,
            'category_id'=> 1
       ],
        [
            'name' =>'Repuesto-2',
            'slug' =>'Repuesto-2',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut facilisis urna, ut aliquam nibh.',
            'extract'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price'=>'250.00',
            'image'=>'https://static.mercadoshops.com/pastillas-freno-jeep-grand-cherokee-ano-2000-al-2005_iZ129XvZxXpZ1XfZ47946858-407959758-1.jpgXsZ47946858xIM.jpg',
            'visible'=>1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime,
            'category_id'=> 1
       ],
        [
            'name' =>'Repuesto-3',
            'slug' =>'Repuesto-3',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut facilisis urna, ut aliquam nibh.',
            'extract'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price'=>'250.00',
            'image'=>'https://http2.mlstatic.com/estopera-rh-diferencial-delantera-jeep-grand-cherokee-sp-D_NQ_NP_503411-MLV20550047842_012016-F.jpg',
            'visible'=>1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime,
            'category_id'=> 1
       ],
       [
            'name' =>'Repuesto-4',
            'slug' =>'Repuesto-4',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut facilisis urna, ut aliquam nibh.',
            'extract'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price'=>'250.00',
            'image'=>'http://www.euro4x4parts.com/photos/mp0/mp01167z.jpg',
            'visible'=>1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime,
            'category_id'=> 1
       ],
       [
            'name' =>'Repuesto-5',
            'slug' =>'Repuesto-5',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut facilisis urna, ut aliquam nibh.',
            'extract'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price'=>'250.00',
            'image'=>'https://www.virtualllantas.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/l/i/lima_caucho_super_jeep_1.jpg',
            'visible'=>1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime,
            'category_id'=> 2
       ],
       [
            'name' =>'Repuesto-6',
            'slug' =>'Repuesto-6',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut facilisis urna, ut aliquam nibh.',
            'extract'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price'=>'250.00',
            'image'=>'https://http2.mlstatic.com/S_887-MLM4724625201_072013-O.jpg',
            'visible'=>1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime,
            'category_id'=> 2
       ],
       [
            'name' =>'Repuesto-7',
            'slug' =>'Repuesto-7',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut facilisis urna, ut aliquam nibh.',
            'extract'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price'=>'250.00',
            'image'=>'https://refaccionariamario.com/27953/4266.jpg',
            'visible'=>1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime,
            'category_id'=> 2
       ],
       [
            'name' =>'Repuesto-8',
            'slug' =>'Repuesto-8',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut facilisis urna, ut aliquam nibh.',
            'extract'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price'=>'250.00',
            'image'=>'https://http2.mlstatic.com/conchas-de-biela-aveo-16-standar-04-08-sealed-power-44210cp-D_NQ_NP_482611-MLV20578484062_022016-F.jpg',
            'visible'=>1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime,    
            'category_id'=> 2
       ],
    );

       Product::insert($data);
    }
}