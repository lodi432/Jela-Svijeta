<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jela;
class InsertMeals extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'napravi:jela';

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
        app()->setLocale('en');
        $jelo1 = new Jela();
        $jelo1->naziv = 'My Awesome En Meal';
        $jelo1->opis = 'Some kind of description';
        $jelo1->code = 'en';
        
        $jelo1->save();

        $jelo2 = new Jela();
        $jelo2->naziv = 'Second Awesome En Meal';
        $jelo2->opis = 'Second kind of description';
        $jelo2->code = 'en';
        $jelo2->save();

        app()->setLocale('hr');
        $jelo1->naziv = 'Moje Fino Hr Jelo';
        $jelo1->opis = 'Opis i Detalji jela';
        $jelo1->code = 'hr';
        $jelo1->save();

        $jelo2->naziv = 'Moje Drugo Hr Jelo';
        $jelo2->opis = 'Drugi Opis i Detalji jela';
        $jelo2->code = 'hr';
        $jelo2->save();

    }
}
