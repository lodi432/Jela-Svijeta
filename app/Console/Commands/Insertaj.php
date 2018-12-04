<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jela;
use App\Tag;
use App\Sastojci;
use App\Kategorija;
class Insertaj extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insertaj:ih';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $sastojci=factory(\App\Sastojci::class, 15)->create();
        $kategorija= factory(\App\Kategorija::class, 4)->create();
        $tags = factory(\App\Tag::class, 15)->create();
    
     
           $jela=factory(\App\Jela::class, 10)->create()->each(function($item) use ($tags,$sastojci) {  
           $tagZaAttach = $tags->random();// izaberi random broj
           $item->tag()->attach($tagZaAttach->id); // attach taga
           $sastojciZaAttach = $sastojci->random();// izaberi random broj
           $item->sastojci()->attach($sastojciZaAttach->id); // attach sastojka
          });
          
    }
}
