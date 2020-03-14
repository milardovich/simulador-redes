<?php

use App\Answer;
use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answers = [

            [
                'answer' => 'Dirección IP destino',
                'correct' => false,
                'question_id' => 1
            ],
            [
                'answer' => 'Puertos origen y destino',
                'correct' => true,
                'question_id' => 1
            ],
            [
                'answer' => 'MAC origen y destino',
                'correct' => false,
                'question_id' => 1
            ],
            [
                'answer' => 'Dirección Ip origen',
                'correct' => false,
                'question_id' => 1
            ],
            [
                'answer' => 'Todas son incorrectas',
                'correct' => false,
                'question_id' => 1
            ],
            [
                'answer' => 'El primero y el segundo octeto',
                'correct' => false,
                'question_id' => 2
            ],
            [
                'answer' => 'El tercero y cuarto octeto',
                'correct' => false,
                'question_id' => 2
            ],
            [
                'answer' => 'Sólo el último octeto',
                'correct' => false,
                'question_id' => 2
            ],
            [
                'answer' => 'El segundo y el tercer octeto',
                'correct' => true,
                'question_id' => 2
            ],
            [
                'answer' => 'Ninguna de las anteriores',
                'correct' => true,
                'question_id' => 2
            ]

        ];
        foreach($answers as $answer){
            Answer::create([
                'answer' => $answer['answer'],
                'correct' => $answer['correct'],
                'question_id' => $answer['question_id']
            ]);
        }
       
    }
}