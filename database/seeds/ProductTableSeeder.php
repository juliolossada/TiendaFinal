<?php
use Illuminate\Database\Seeder;
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
        $data = array(
            [
                'name'          => 'Repuesto 1',
                'slug'          => 'Repuesto 1',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price'         => 275.00,
                'image'         => 'http://www.repuestosdecamiones.es/intranet/software/imagenes/articulos/532_____manilla_roscada.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 1
            ],
            [
                'name'          => 'Repuesto 2',
                'slug'          => 'Repuesto 2',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price'         => 255.00,
                'image'         => 'http://www.airdelights.com/images/items/5301188.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 1
            ],
            [
                'name'          => 'Repuesto 3',
                'slug'          => 'Repuesto 3',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price'         => 300.00,
                'image'         => 'http://repuestoslumiere.com.ve/upload/album/60/img-c178a38e.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 1
            ],
            [
                'name'          => 'Repuesto 4',
                'slug'          => 'Repuesto 4',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price'         => 475.00,
                'image'         => 'http://images.todainfo.com/EMP_1967/partes-electricas-para-autos-14199-MCO20084238503_042014-F.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 2
            ],
            [
                'name'          => 'Repuesto 5',
                'slug'          => 'Repuesto 5',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price'         => 280.00,
                'image'         => 'https://refaccionariamario.com/6667-tm_thickbox_default/bomba-de-gasolina-para-pointer-original.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 2
            ],
            [
                'name'          => 'Repuesto 6',
                'slug'          => 'Repuesto 6',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price'         => 275.00,
                'image'         => 'http://www.airdelights.com/images/items/5301188.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 2
            ],
            [
                'name'          => 'Respuesto 7',
                'slug'          => 'Respuesto 7',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price'         => 275.00,
                'image'         => 'http://www.hr-refacciones.com.mx/3367-thickbox_default/fuel-injection-sensor-ckp-ciguenal-jeep-cherokee-grand-cheroke-2778.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 1
            ],
            [
                'name'          => 'repuesto 8',
                'slug'          => 'repuesto 8',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price'         => 275.00,
                'image'         => 'https://partescar.com/2504-thickbox_default/motor-de-arranque-jeep-liberty-02-07.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'category_id'   => 2
            ],
            
        );
        Product::insert($data);
    }
}