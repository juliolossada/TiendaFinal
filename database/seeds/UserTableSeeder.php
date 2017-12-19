<?php
use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
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
				'name' 		=> 'Julio', 
				'last_name' => 'Lossada', 
				'email' 	=> 'HOla@gmail.com', 
				'user' 		=> 'Lossada',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'admin',
				'active' 	=> 1,
				'address' 	=> 'Zulia, Mcbo',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'Andrea', 
				'last_name' => 'Lozano', 
				'email' 	=> 'andrea@correo.com', 
				'user' 		=> 'andrealozano',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'user',
				'active' 	=> 1,
				'address' 	=> 'Barinas, Barinas',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
		);
		User::insert($data);
    }
}