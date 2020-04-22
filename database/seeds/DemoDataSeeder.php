<?php

use App\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DemoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = './public/uploads/rce2.jpg';
        $image = file_get_contents($path);
        // $base64 = base64_encode($logo);

        DB::table('users')->insert([
            'name'     => 'John',
            'image'     => $image,
            'email'    => 'john@doe.com',
            'avatar'   => null,
            'password' => bcrypt('password'),
        ]);

        
            
            
            

        

        
            

        factory(Event::class, 50)->create();
    }
}
