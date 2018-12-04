<?php

use Illuminate\Database\Seeder;

class JelaSvijetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $sastojci=factory(App\Sastojci::class, 15)->create();
        $kategorija= factory(App\Kategorija::class, 15)->create();
        $tags = factory(App\Tag::class, 15)->create();
    

       factory(App\Jela::class, 15)->create()->each(function($item) use ($tags,$sastojci) {
          
           $tagZaAttach = $tags->random();
           $item->tag()->attach($tagZaAttach->id); 
           
           $sastojciZaAttach = $sastojci->random();
           $item->sastojci()->attach($sastojciZaAttach->id); 
       });
      


        
        
        
    }
}
