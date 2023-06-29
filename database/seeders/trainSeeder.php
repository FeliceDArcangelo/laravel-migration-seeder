<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class trainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'Azienda'=> 'Trenitalia',
                'Stazione_di_partenza' => 'Roma Termini',
                'Stazione_di_arrivo' => 'Bologna Centrale',
                'Orario_di_partenza' => '09:10',
                'Orario_di_arrivo' => '11:03',
                'Codice_Treno' => '702583',
                'Numero_Carrozze' => '16',
                'In_orario' => false,
                'Cancellato' => false,
            ],
            [
                'Azienda'=> 'Italo',
                'Stazione_di_partenza' => 'Pescara Centrale',
                'Stazione_di_arrivo' => 'Torino Porta Nuova',
                'Orario_di_partenza' => '12:42',
                'Orario_di_arrivo' => '19:17',
                'Codice_Treno' => '497338',
                'Numero_Carrozze' => '18',
                'In_orario' => false,
                'Cancellato' => false,
            ],
            [
                'Azienda'=> 'Trenitalia',
                'Stazione_di_partenza' => 'Firenza SMN',
                'Stazione_di_arrivo' => 'Milano Centrale',
                'Orario_di_partenza' => '15:36',
                'Orario_di_arrivo' => '17:22',
                'Codice_Treno' => '886221',
                'Numero_Carrozze' => '22',
                'In_orario' => true,
                'Cancellato' => true,
            ],
            [
                'Azienda'=> 'Trenitalia',
                'Stazione_di_partenza' => 'Napoli Centrale',
                'Stazione_di_arrivo' => 'Genova Piazza Principe',
                'Orario_di_partenza' => '07:45',
                'Orario_di_arrivo' => '16:13',
                'Codice_Treno' => '928735',
                'Numero_Carrozze' => '20',
                'In_orario' => false,
                'Cancellato' => false,
            ],
            
        ];

        foreach($trains as $arrTrain){
            Train::create($arrTrain);
        }
    }
    
}
