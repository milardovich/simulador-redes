<?php

use App\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [

            [
                'question' => 'Cuál es la dirección que aparece en un segmento TCP?'
            ],
            [
                'question' => 'Qué octeto (s) es (son) asignado (s) para direccionar subredes en una dirección clase A con máscara 255.255.248.0?'
            ]

        ];
        foreach($questions as $question){
            Question::create([
                'question' => $question['question']
            ]);
        }
       
    }
}
