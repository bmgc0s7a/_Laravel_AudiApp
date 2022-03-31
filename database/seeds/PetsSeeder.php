<?php

use Illuminate\Database\Seeder;

class PetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Pets::class,400)->create();

        $names = [
            'Patas', 
            'Gatucho', 
            'Redolfo', 
            'Manuel'
        ];

        $colors = [
            'Preto', 
            'Azul', 
            'Amarelo', 
            'Roxo',
            'Torrado'
        ];
        
        $dateBirth = [
            new DateTime('2010-10-01'),  
            new DateTime('2020-04-20'), 
            new DateTime('2022-10-24') , 
            new DateTime('2021-10-24')
        ];

        for($i=0;$i<250;$i++){
            \DB::table('pets')->insert([
                'name' => $names[rand(0, count($names) - 1)],
                'color' => $colors[rand(0, count($colors) - 1)],
                'date_of_birth' => $dateBirth[rand(0, count($dateBirth) - 1)],
                'person_id' => rand(1, 150),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
        }
    }
}
