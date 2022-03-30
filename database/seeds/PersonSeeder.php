<?php

use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Person::class,100)->create();


        $namesPeople = [
            'Bruno', 
            'Miguel', 
            'Gomes', 
            'Costa'
        ];
        
        $dateBirth = [
            new DateTime('1998-10-01'),  
            new DateTime('1996-04-20'), 
            new DateTime('1990-10-24') , 
            new DateTime('1994-10-24')
        ];

        $email = [ 
            "bmgc_7@hotmail.com",
            "test@test.com",
            "info@info.com",
            "test@abc.com",
            "bingo@bingo.com"
            ];

        for($i=0;$i<50;$i++){
            \DB::table('people')->insert([
                'name' => $namesPeople[rand(0, count($namesPeople) - 1)],
                'date_of_birth' => $dateBirth[rand(0, count($dateBirth) - 1)],
                'email' => $email[rand(0, count($email) - 1)]
            ]);
        }
    }
}
