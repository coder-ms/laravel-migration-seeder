<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = config('train_data.treni');
        //dd($trains);
        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->Azienda = $train['Azienda'];
            $newTrain->Stazione_di_Partenza = $train['Stazione_di_Partenza'];
            $newTrain->Stazione_di_Arrivo = $train['Stazione_di_Arrivo'];
            $newTrain->Orario_di_Partenza = $train['Orario_di_Partenza'];
            $newTrain->Orario_di_Arrivo = $train['Orario_di_Arrivo'];
            $newTrain->Codice_Treno = $train['Codice_Treno'];
            $newTrain->Numero_Carrozze = $train['Numero_Carrozze'];
            $newTrain->In_orario = $train['In_orario'];
            $newTrain->Cancellato = $train['Cancellato'];
            $newTrain->save();
        }
    }
}
