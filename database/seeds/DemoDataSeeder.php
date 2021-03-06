<?php

use App\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use \RarEntry;


class DemoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        $path_uploads = realpath ( './public/uploads' );
        exec( 'unzip -o ' . $path_uploads . '/images.zip' );

        for ($i=1; $i < 14 ; $i++) { 
            $path =  $i . '.jpg';
            $image = file_get_contents($path);
            // $base64 = base64_encode($logo);
            
            if ( $i == 3 ){
                DB::table('users')->insert([
                    // 'name'     => 'lebeaujack',
                    'image'     => $image,
                    'email'    => 'lebeaujack@etalonducul.com',
                    // 'avatar'   => null,
                    // 'password' => 'etalonducul',
                ]);
            }
            else {
                DB::table('users')->insert([
                    // 'name'     => 'Jack' . $i,
                    'image'     => $image,
                    'email'    => 'john@doe' . $i . '.com',
                    // 'avatar'   => null,
                    // 'password' => bcrypt('password'),
                    ]);
                }

                // Suppression de l'image :
                unlink($path);
            }

        
            
            
            

        

        
            

        factory(Event::class, 50)->create();
    }
}
