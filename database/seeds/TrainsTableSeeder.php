<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++){
            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->Stazione_di_partenza = $faker->city();
            $newTrain->Stazione_di_arrivo = $faker->city();
            $newTrain->Orario_di_partenza = $faker->time();
            $newTrain->Orario_di_arrivo = $faker->time();
            $newTrain->Codice_Treno = $faker->numberBetween(0, 9999);
            $newTrain->Numero_Carrozze = $faker->numberBetween(0, 100);
            $newTrain->In_orario = $faker->boolean();
            $newTrain->Cancellato = $faker->boolean();
            $newTrain->save();
        }
    }
}
